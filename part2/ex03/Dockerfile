# installing Gogs with Go on Debian 
# tutorial: https://www.linode.com/docs/development/version-control/install-gogs-on-debian-8-jessie

FROM debian

RUN apt-get update && apt-get upgrade -y
RUN apt-get install git wget gcc -y

# need go and gogs to be under a user; create a a user
RUN adduser --disabled-login --gecos 'Gogs' git
USER git

# create & cd into directory for GO
RUN mkdir -p /home/git/local
WORKDIR /home/git/local

# download & install GO
RUN wget https://storage.googleapis.com/golang/go1.9.2.linux-amd64.tar.gz 
RUN tar -xvzf go1.9.2.linux-amd64.tar.gz

# set GOPATH env (specifies location of the workspace)
ENV GOROOT=/home/git/local/go
ENV GOPATH=/home/git/go
ENV PATH=$PATH:$GOROOT/bin:$GOPATH/bin

# install gogs w/ GO
RUN mkdir -p /home/git/go/src/github.com/gogits

# change to GOGs directory
WORKDIR $GOPATH/src/github.com/gogits

# download/clone the gogs repository
	# --depth=1 >> creates a shallow clone where users only pulls from the current head of the repository
	# -b >> gets a specific branch from a repo
	# having both limits that amount of history that will be downloaded
RUN git clone --depth=1 -b develop https://github.com/gogits/gogs.git
WORKDIR $GOPATH/src/github.com/gogits/gogs
RUN go build

# sqlite part of GO build tags >> -tags calls a "pre-made" program that can be quickly installed?
	# refer to: https://gogs.io/docs/installation/install_from_source
RUN go get -u -tags "sqlite" github.com/gogits/gogs
RUN go build -tags "sqlite"

# connect to a port
EXPOSE 3000

# configures user to sqlite db? 
ENV USER=git

ENTRYPOINT ["./gogs", "web"]

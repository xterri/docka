FROM debian

RUN apt-get update && apt-get upgrade -y &&	apt-get install wget bzip2 -y && \
	wget http://dl.4players.de/ts/releases/3.0.13.8/teamspeak3-server_linux_amd64-3.0.13.8.tar.bz2 && \
	tar -xjvf *.tar.bz2

ENTRYPOINT ["sh", "teamspeak3-server_linux_amd64/ts3server_minimal_runscript.sh"]

#docker build -t teamspeak .
#teamspeak default server ports: 
	# virtual voice server 9987/udp
	# ServerQuery 10011/tcp
	# File transfer 30033/tcp
#docker run -d -it -p 9987/udp teamspeak
	# -it = get admin privileges
#connect in teamspeak: <machine IP address>:<port #>

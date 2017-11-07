FROM ruby

RUN apt-get update -y
RUN apt-get install -y build-essential libpq-dev nodejs -y
RUN apt-get autoclean -y && apt-get clean -y
RUN gem install rails

ONBUILD COPY app/ /opt/app

# install the stuff for rails
ONBUILD RUN bundle install
ONBUILD RUN rake db:migrate
ONBUILD RUN rake db:setup
ONBUILD RUN rake db:seed

# set workdir
WORKDIR /opt/app

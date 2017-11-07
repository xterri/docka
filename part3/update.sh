# copy project from host machine to docker-machine
docker-machine -s /tmp/docker scp -d -r ./app MShop:/home/dock/ft_minisho

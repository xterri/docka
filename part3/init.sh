# set up docker-machine 
	# specify storage path for it on host machine w/ "-s <path>"
docker-machine -s /tmp/docker create -d virtualbox MShop

# set up environment
eval $(docker-machine -s /tmp/docker env MShop)

# create the app directory on the docker-machine; be specific on mkdir to override admin / permission settings
docker-machine -s /tmp/docker ssh MShop mkdir /home/dock/ft_minisho

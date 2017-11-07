docker build -t gogs .

docker run -it -p 3000:3000 --name=g_test gogs

# on web client, enter docker-machine's ip address and port # (ex. 192.168.99.100:3000)
# install the SQLite3 DB 
	# change the Database Type to SQLite3
	# change Application URL from http://localhost:3000/ to http://<docker-machine ip>:3000/
		# (ex. http://192.168.99.100:3000/)
	# install Gogs
# sign up / register for an account
# log in with created account
# create a repository
# copy repository link
# in another terminal window (not the one with the server running), git clone the repository link
# go into the repository, create and git add / push a random file
# refresh the site and the file should be on there

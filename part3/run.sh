# run & build the app onto the server
# copy site data to host
sh ./update.sh

GREEN="\e[0;32m"
NONE="\e[0m"

printf "IP Address: $GREEN%s$NONE\n" "$(docker-machine -s /tmp/docker ip MShop)"

# create and run the container
docker-compose up --build

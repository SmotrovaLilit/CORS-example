IMAGE_NAME_FRONTEND := cors_frontend_example
IMAGE_NAME_SERVER := cors_server_example
CONTAINER_NAME_SERVER := cors_server_example
CONTAINER_NAME_FRONTEND := cors_frontend_example

docker-build:
	docker build -t ${IMAGE_NAME_FRONTEND}  ./frontend
	docker build -t ${IMAGE_NAME_SERVER} ./server

docker-run:
	docker rm -f ${CONTAINER_NAME_FRONTEND} || true
	docker rm -f ${CONTAINER_NAME_SERVER} || true
	docker run -d --name ${CONTAINER_NAME_FRONTEND} -p 8088:80 ${IMAGE_NAME_FRONTEND}:latest
	docker run -d --name ${CONTAINER_NAME_SERVER} -p 8089:80 ${IMAGE_NAME_SERVER}:latest

sites: docker-build docker-run
# Task 1: Docker Image with Git

## Objective
Create a Docker image with Git installed using Alpine Linux.

## Dockerfile
The Dockerfile uses Alpine Linux as the base image,
installs Git, and starts a shell when the container runs.

## Image Creation
Command:
sudo docker build -t task1-git .

## Image Tagging
Image tag:
zainabbas98/devops:q1.v1

## Container Execution
The container was started in the background using
the -d flag.

## Docker Attach
The docker attach command was used to connect to the
running container. Git was verified using git --version.

## Docker Hub
The image was pushed successfully to Docker Hub.

## Conclusion
The Docker image was created, tested, and uploaded
successfully.

# Task 1: Docker Image with Git

## 1. Objective
Create a Docker image with Git installed using Alpine Linux.

## 2. Dockerfile
The Dockerfile uses Alpine Linux as the base image, installs Git, and starts a shell.

## 3. Build the Image
Command used:
`sudo docker build -t task1-git .`

The image was built successfully.

## 4. Tag the Image
Image tag: `zainabbas98/devops:q1.v1`

## 5. Run the Container
The container was started in the background using the `-dit` flags.

## 6. Verify Git
Command used inside the container:
`git --version`

Output: `git version 2.54.0`

## 7. Docker Attach
The `docker attach` command connected the terminal to the running container's main process.

## 8. Push to Docker Hub
The image was successfully pushed to Docker Hub:
`zainabbas98/devops:q1.v1`

## 9. Conclusion
The image was created, Git was verified, the container was run in the background, and the image was uploaded to Docker Hub.


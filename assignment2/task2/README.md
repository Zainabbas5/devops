# Task 2: Python Application with Docker Compose

## 1. Objective
The objective of this task is to run a Python web application and Redis service using Docker Compose.

## 2. Project Files
- `app.py`: Python web application that displays a message and counts visits.
- `requirements.txt`: Contains the Flask and Redis Python packages.
- `Dockerfile`: Uses `python:3.9-alpine` and installs the required packages.
- `compose.yml`: Configures the web application, Redis service, network, and volume.

## 3. Build and Start the Application
Command used:

`sudo docker compose up -d --build`

The web application image was built successfully, and Docker Compose started both services.

## 4. Verify Containers
Command used:

`sudo docker compose ps`

Both the web and Redis containers were running successfully.

## 5. Network and Volume
Docker Compose created the `task2_default` network for communication between the web application and Redis.

The web service uses a bind mount to share the project directory with the container at `/code`.

## 6. Test the Application
Opened `http://localhost:8000` in the browser.

The page displayed:

`Hello from Docker! I have been seen 1 time(s).`

Refreshing the page increased the visit counter, confirming that the application communicates with Redis.

## 7. Conclusion
The Python web application and Redis service were successfully built and started using Docker Compose. The browser test confirmed that the visit counter works.

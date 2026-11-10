Message Queue + Visit Counter with Redis

Cloud Computing & DevOps Midterm Project

A multi-container microservices architecture utilizing Laravel, Docker Compose, and Redis as a shared in-memory data store.

1. Project Overview

This project demonstrates core Cloud Computing and DevOps principles:

Docker Containerization: Packaging independent Laravel applications into isolated, reproducible containers.

Orchestration with Docker Compose: Managing multi-container deployments with a single configuration file.

Shared In-Memory Storage: Using Redis to share state and data between decoupled microservices.

Data Persistence: Leveraging named Docker volumes to preserve Redis data across container restarts.

2. Applications Overview

App 1 – Message Collector (Producer + Counter)

Framework: Laravel

Port: 8000

Features:

Provides a user form to submit messages.

Increments a global visit counter (visit_count) in Redis using INCR on every page load.

Pushes user messages into a Redis List (messages) using RPUSH.

App 2 – Dashboard (Observer)

Framework: Laravel

Port: 8001

Features:

Reads and displays the total number of visits from Redis using GET.

Reads and displays the total message count from Redis using LLEN.

Displays statistics in real-time without communicating directly with App 1.

3. System Architecture

graph TD
    User([User Browser]) -->|Port 8000| App1[App 1: Message Collector]
    User -->|Port 8001| App2[App 2: Dashboard]
    
    App1 -->|INCR / RPUSH| Redis[(Redis Container)]
    App2 -->|GET / LLEN| Redis
    
    subgraph Docker Network
        App1
        App2
        Redis
    end
    
    Redis -.->|Persists Data| Volume[(Named Volume: redis_data)]


Note: App 1 and App 2 do not communicate directly with each other. They interact solely through the central Redis instance.

4. Technology Stack

Language: PHP 8.4

Framework: Laravel

Database / Queue: Redis 7

PHP Client: Predis

Containerization: Docker & Docker Compose

5. Repository Structure

CloudComputingDevOpsMidTerm-/
├── app1/                  # Message Collector Laravel Application
├── app2/                  # Dashboard Laravel Application
├── docker-compose.yml     # Docker Compose setup file
├── .gitignore             # Git ignore rules
└── README.md              # Project documentation


6. Setup & Installation Guide

Prerequisites

Docker Desktop installed and running.

Git installed.

Step 1: Clone the Repository

git clone https://github.com/israa-tareq/CloudComputingDevOpsMidTerm-.git
cd CloudComputingDevOpsMidTerm-


Step 2: Create Environment File

Create a .env file in the project root directory (same level as docker-compose.yml):

APP1_KEY=base64:your_app1_key_here
APP2_KEY=base64:your_app2_key_here


Step 3: Build & Start Containers

Run the following command in your terminal:

docker compose up -d --build


Step 4: Verify Running Services

docker compose ps


7. Accessing the Applications

App 1 (Message Collector): http://localhost:8000

App 2 (Dashboard): http://localhost:8001

8. Redis Commands Used

INCR visit_count – Increments total visits.

RPUSH messages "text" – Appends a message to the queue.

GET visit_count – Fetches total visit count.

LLEN messages – Fetches total message count.

To inspect Redis directly:

docker compose exec redis redis-cli


9. Docker Management Commands

Start containers: docker compose start

Stop containers: docker compose stop

View logs: docker compose logs

Shut down environment: docker compose down


10. Project Information

Course: Cloud Computing & DevOps

Repository: [GitHub Link](https://github.com/israa-tareq/CloudComputingDevOpsMidTerm-.git)
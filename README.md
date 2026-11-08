# CloudComputingDevOpsMidTerm-

# Message Queue and Visit Counter with Redis

## Project Description
A cloud computing project consisting of two Laravel
web applications sharing a Redis database.

## Applications
- App 1: Message Collector
- App 2: Dashboard

## Technologies
- PHP
- Laravel
- Redis
- Docker
- Docker Compose

## Project Structure
- app1/: Message Collector application
- app2/: Dashboard application
- docker-compose.yml: Container configuration

## Redis Configuration
- Host: redis
- Port: 6379
- Database: 0

## Redis Keys
- messages: Stores submitted messages.
- visit_count: Stores page visit count.

## Persistence
Redis data is stored using a Docker named volume:
redis_data.

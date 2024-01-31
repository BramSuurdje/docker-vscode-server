### Docker Development Server

This GitHub repository provides Dockerfiles to set up a development environment with multiple servers: a VSCode web server, an Nginx server with PHP support, a PHPMyAdmin server, and a MariaDB server.

#### Getting Started
To run this project, follow these steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/BramSuurdje/docker-vscode-server.git
   ```

2. **Run Docker Compose:**
   Navigate to the project directory and execute:
   ```bash
   docker compose up
   ```

#### Accessing Servers and Ports
After running the Docker Compose command, you can access the servers via the following ports:

- **Webserver (Nginx with PHP):** Port `80`
  - Access the web server at `http://localhost:80`

- **VSCode Server:** Port `81`
  - Open VSCode server at `http://localhost:81`

- **PHPMyAdmin:** Port `82`
  - Access PHPMyAdmin at `http://localhost:82`

#### Username and Passwords
The credentials to access various services are as follows (taken from the `compose.yml` file):

- **MariaDB (Database)**
  - Username: `root`
  - Password: `qwerty`

- **PHPMyAdmin**
  - Username: `root`
  - Password: `qwerty`

### Additional Notes
- Ensure that Docker is installed on your system before running the `docker-compose up` command.
- Customize configurations or environment variables as needed by modifying the respective Dockerfiles or `.env` files.

Happy coding! If you have any issues or questions, feel free to open an issue in this repository.

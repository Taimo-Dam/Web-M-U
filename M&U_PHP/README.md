# PHP Music App

## Overview
The PHP Music App is a web application that allows users to explore music, create playlists, and manage their favorite tracks. The application features user authentication, allowing users to register, log in, and access premium content.

## Project Structure
```
php-music-app
├── assets
│   ├── css
│   │   └── style.css
│   ├── js
│   │   └── script.js
├── config
│   └── db.php
├── includes
│   ├── header.php
│   ├── footer.php
│   └── sidebar.php
├── public
│   ├── index.php
│   ├── login.php
│   ├── logout.php
│   ├── register.php
│   └── prenium.php
├── sql
│   └── schema.sql
└── README.md
```

## Features
- User registration and login
- User authentication and session management
- Sidebar navigation for easy access to different sections
- Premium content access for subscribed users
- Responsive design with a modern user interface

## Setup Instructions
1. **Clone the Repository**
   ```bash
   git clone <repository-url>
   cd php-music-app
   ```

2. **Database Configuration**
   - Create a MySQL database for the application.
   - Update the `config/db.php` file with your database credentials.

3. **Run SQL Schema**
   - Execute the SQL statements in `sql/schema.sql` to create the necessary tables.

4. **Start the Server**
   - Use a local server environment like XAMPP or WAMP to run the application.
   - Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).

5. **Access the Application**
   - Open your web browser and navigate to `http://localhost/php-music-app/public/index.php`.

## Usage Guidelines
- **Register**: New users can create an account by navigating to the register page.
- **Login**: Existing users can log in using their credentials.
- **Logout**: Users can log out to end their session.
- **Explore Music**: Users can browse through different music categories and manage their playlists.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any suggestions or improvements.

## License
This project is licensed under the MIT License. See the LICENSE file for details.
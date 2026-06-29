# 🚌 Smart Mobility Solution for Real-Time Bus Tracking

## 📖 Project Description

This project is a real-time bus tracking system that uses GPS data from the driver's mobile device. The system enables users to track buses based on routes, view live bus locations, and estimate arrival times (ETA) through an interactive map interface.

### ✨ Key Features

- Real-time bus tracking
- GPS-based location updates
- Route-wise bus search
- Estimated Time of Arrival (ETA)
- Interactive map integration
- Mobile-based GPS tracking using Traccar

## 🔐 Demo Credentials

| Username | Password |
|-----------|-----------|
| admin | admin |

---

# ⚙️ Traccar Server Setup

## 1. Download Traccar Server

Download and install the latest Traccar Server release.

## 2. Replace Configuration File

Replace the default configuration file with:

```text
project_folder/note/custom_traccar_conf/traccar.xml
```

## 3. Run Database Fix Script

Execute the SQL script:

```sql
sql_error_device_time.sql
```

This bypasses the device time synchronization issue.

## 4. Start Traccar Service

Start the Traccar service from Windows Services.

Open:

```text
http://localhost:8080
```

## 5. Register Bus Devices

Configure the following:

```text
Name: Bus Name
Device Identifier: Bus Number
```

## 6. Configure Cloudflare Tunnel

Rename the downloaded executable to:

```text
cloudflared.exe
```

## 7. Start Tunnel

Open Command Prompt:

```bash
cd C:\
cloudflared tunnel --url http://localhost:8080
```

Example output:

```text
https://random-name.trycloudflare.com
```

## 8. Configure Traccar Client App

Download:

https://play.google.com/store/apps/details?id=org.traccar.client

In the app settings:

```text
Server URL: https://random-name.trycloudflare.com
```

## 9. Configure Device Identifier

Set:

```text
Device Identifier = Bus Number
```

Enable all location permissions and GPS services.

---

# 🚀 Main Project Setup

## 1. Copy Project Files

Place the project folder inside:

```text
C:\xampp\htdocs\
```

## 2. Start XAMPP

Start:

- Apache
- MySQL

Open:

```text
http://localhost/project_folder_name
```

## 3. Import Database

Import:

```sql
database.sql
```

using phpMyAdmin.

## 4. Configure Cloudflare Tunnel

Rename the executable to:

```text
cloudflared.exe
```

## 5. Expose Local Project

Open Command Prompt:

```bash
cd C:\
cloudflared tunnel --url http://localhost:80
```

Access the application using:

```text
https://random-name.trycloudflare.com/project_folder_name
```

---

# 🛠️ Technology Stack

- PHP
- MySQL
- JavaScript
- HTML5
- CSS3
- Traccar GPS Server
- Cloudflare Tunnel
- XAMPP

---

# 📂 Repository

🔗 Repository Link:

https://github.com/shashank-ac/bus-tracking-system

---

# 👨‍💻 Author

**Shashank Achar**

GitHub: https://github.com/shashank-ac

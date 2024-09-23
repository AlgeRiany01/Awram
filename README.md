# Donation and Medical Aid Platform

## Overview

This project is a donation and medical aid platform developed using **Laravel**, where patients can view the donations made by donors, purchase medicine, and access other features like full control of their profile. The platform has three primary user roles: **Admin**, **Patient**, and **Donor**.

### Roles:

-   **Admin**: Has full control over the platform, including managing users (patients and donors), approving donations, and viewing all activities on the site.
-   **Patient**: Can view donations, purchase medicines, and manage their own profile and orders.
-   **Donor**: Can donate medicines, money, or other resources, and see the list of patients who are in need.

## Features

1. **Admin Dashboard**:
    - Full management of users (Patients and Donors).
    - Approval of donations.
    - Viewing all site activities and logs.
2. **Patient**:

    - View donations from donors.
    - Purchase medicines and other medical supplies.
    - Manage profile and view order history.

3. **Donor**:
    - Make donations (money, medicines, etc.).
    - View patients in need.

## Technology Stack

-   **Backend**: Laravel 10.x
-   **Frontend**: Bootstrap 5.x
-   **Database**: MySQL
-   **Version Control**: GitHub

### تصميم الصفحة الرئيسية (HTML & CSS)

إذا أردت تصميمًا بسيطًا للصفحة يحتوي على **علم ليبيا** و **شعار Laravel**، يمكنك استخدام الكود التالي كدليل مبدئي:

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Donation and Medical Aid Platform</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <style>
            body {
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .hero {
                text-align: center;
                padding: 50px;
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .hero img {
                width: 150px;
                height: auto;
                margin: 20px;
            }
            .hero h1 {
                font-size: 2.5rem;
                color: #343a40;
            }
            .hero p {
                font-size: 1.2rem;
                color: #6c757d;
            }
        </style>
    </head>
    <body>
        <div class="container hero">
            <img src="path-to-libyan-flag.png" alt="Libyan Flag" />
            <h1>Welcome to the Donation and Medical Aid Platform</h1>
            <p>Powered by Laravel</p>
            <img src="path-to-laravel-logo.png" alt="Laravel Logo" />
        </div>
    </body>
</html>
```

# सेरोफेरो Newsportal 📰

![PHP](https://img.shields.io/badge/PHP-8.2-blue) ![Laravel](https://img.shields.io/badge/Laravel-11.31-red) ![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.4.17-38B2AC) ![License](https://img.shields.io/badge/License-MIT-green)

## Overview
**सेरोफेरो Newsportal** is a modern, feature-rich web application designed to deliver the latest news, breaking updates, and categorized articles, with a special focus on the Nepali community. Built with a robust tech stack, it offers a seamless, responsive user experience across devices, making it accessible to a diverse audience. The platform features a powerful admin panel for content management and a dynamic frontend optimized for engagement, incorporating culturally relevant elements like Nepali date formatting.

This project showcases advanced proficiency in full-stack development, leveraging **Laravel**, **Tailwind CSS**, and **Filament PHP** to create a scalable, maintainable, and user-centric news platform. It reflects a commitment to clean code, modern design principles, and cultural inclusivity.

## 📋 Table of Content
- **Features**
- **Technology Used**
- **Project Goals**
- **Installation**
- **Usage**
- **Preview**
- **Contributing**
- **License**

## ✨ Features
- **Article Management**: Intuitive admin panel powered by Filament PHP for creating, editing, and deleting articles and categories with real-time previews.
- **Search Functionality**: Responsive search bar in the navbar, enabling users to find articles by keywords with instant results using Axios for asynchronous requests.
- **Responsive Design**: Mobile-first UI crafted with Tailwind CSS and Flowbite, featuring smooth animations and hover effects for an engaging experience.
- **Nepali Date Support**: Localized date formatting in the Nepali calendar using the `pratiksh/nepalidate` package, enhancing cultural relevance.
- **Trending News**: Dynamic highlighting of trending and breaking news to boost user engagement and retention.
- **Dynamic UI**: Interactive article metadata (e.g., publication date, view count) with accessibility-focused design and Devanagari font support.
- **Performance Optimized**: Leverages Laravel Vite for fast asset compilation and optimized page load times.

## 🛠️ Technologies Used
- **Frontend**: HTML, [Tailwind CSS](https://tailwindcss.com/), [Flowbite](https://flowbite.com/), [Alpine.js](https://alpinejs.dev/), [Axios](https://axios-http.com/)
- **Backend**: [Laravel 11.31](https://laravel.com/), PHP 8.2
- **Database**: MySQL (configurable via `.env`)
- **Tools**: [Laravel Vite](https://laravel.com/docs/vite), [Laravel Breeze](https://laravel.com/docs/starter-kits), [NepaliDate](https://github.com/pratiksh/nepalidate), [Heroicons](https://heroicons.com/)
- **Version Control**: Git with GitHub for collaborative development and CI/CD integration

## 🎯 Project Goals
- Build a scalable news platform tailored to the Nepali community, prioritizing cultural relevance and accessibility.
- Implement a robust backend with Laravel for efficient content management and secure APIs.
- Deliver a visually appealing, responsive frontend with Tailwind CSS to ensure a seamless user experience across devices.
- Incorporate modern development practices, including modular code, performance optimization, and version control.

## 🔧 Installation
To set up **सेरोफेरो Newsportal** locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/sonuma21/Newsportal.git
   cd Newsportal
2. **Install Dependencies:**
    ```bash
    composer install
    npm install
3. **Set Up Environment:**
    ```bash
    cp .env.example .env
4. **Run the Application:**
    ```bash
    php artisan serve

## 🚀 Usage
- **For Admin :** 
    - Access the admin panel at http://localhost:8000/dashboard, 
    - Log in with credentials,
    - Manage news posts, categories, and other content via the dashboard.
- **For User :**
    - Visit the homepage to browse news articles,
    - use the search bar to find specific topics,
    - navigate through categories.

## 📸 Preview/ Screenshots
- **🏠 Homepage :**
Browse the latest news articles in a clean, organized layout.

![Homepage view](images/homepage.png)

- **🖥️ Admin Dashboard :**
Manage news articles, categories, and more with an intuitive interface.

![Dashboard view](images/dashboard.png)

![Index view](images/index.png)

![Create view](images/homepage.png)

- **📝 Article Page :**
Read full articles with a responsive and engaging design.

![Article view](images/article.png)

![Category view](images/category.png)


## 🤝 Contributing
Pull requests are welcome.

For major changes, please open an issue first to discuss what you would like to change.

## 📜 License
This project is licensed under the MIT License.

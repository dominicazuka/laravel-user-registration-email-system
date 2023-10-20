# Project Readme - User Registration and Email System

## Introduction

This project is a coding test that demonstrates a user registration system with email functionality. It adheres to the Model-View-Controller (MVC) architecture and follows good programming practices. The system allows users to register, upload profile pictures, and sends email notifications to registered users.

## Features

1. **MVC Architecture** : The project strictly follows the Model-View-Controller (MVC) design pattern, ensuring a clear separation of concerns.
2. **Helper File** : The system includes a helper file that harmonizes email functionality, making it accessible from any part of the project.
3. **User Registration** : Users can register by providing their details, including name, email, password, and a profile picture.
4. **Profile Picture Upload** : Registered users can upload a profile picture, which is stored securely on the server.
5. **Database** : MySQL is used to store user registration data. Users' information is persisted in a database for easy retrieval and management.
6. **No CSRF Protection** : The project does not implement CSRF protection in the registration form, as specified in the requirements. However, in a production environment, CSRF protection should be implemented for security.

## Technologies and Packages

The project is built using the Laravel framework and leverages various Laravel packages and tools. Here are the essential Laravel packages used/needed:

* **Laravel Framework** : Laravel is a popular PHP web application framework that provides a robust foundation for web development.
* **Laravel Breeze** : Laravel Breeze is used to set up user registration and authentication quickly.
* **Laravel Image Intervention** : The Image Intervention package is used for image manipulation and uploading profile pictures.
* **MySQL Database** : MySQL is used as the database to store user information.

## How to Run the Project

To run the project, follow these steps:

1. Clone the repository to your local machine:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex ml-auto gizmo:ml-0 gap-2 items-center"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="icon-sm" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">git clone https://github.com/dominicazuka/laravel-user-registration-email-system.git
   </code></div></div></pre>
2. Install project dependencies using Composer:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex ml-auto gizmo:ml-0 gap-2 items-center"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="icon-sm" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">composer install
   </code></div></div></pre>
3. Configure your `.env` file to set up the database connection and email settings. Make sure to set your mail driver, mail host, mail port, and mail from values.
4. Generate a new application key:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex ml-auto gizmo:ml-0 gap-2 items-center"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="icon-sm" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php artisan key:generate
   </code></div></div></pre>
5. Migrate the database to create the required tables:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex ml-auto gizmo:ml-0 gap-2 items-center"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="icon-sm" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php artisan migrate
   </code></div></div></pre>
6. Serve the application:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 gizmo:dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex ml-auto gizmo:ml-0 gap-2 items-center"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="icon-sm" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php artisan serve
   </code></div></div></pre>
7. Access the project in your web browser at `http://localhost:8000`.

## Note

This project is a coding test and, as such, does not implement CSRF protection in the registration form. In a production environment, you should include proper CSRF protection for security.

## Contact Information

For any questions or clarifications, please reach out to the project developer:

**Developer:** Dominic Azuka
**Email:** [visitdominicazuka@gmail.com]([v](mailto:visitdominicazuka@gmail.com)visitdominicazuka@gmail.com)
**GitHub:** [github.com/dominicazuka](github.com/dominicazuka)

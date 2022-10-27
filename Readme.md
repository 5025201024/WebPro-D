# Web Programming D Midterms

| **No**        | **Name**      | **NRP**   | 
| ------------- | ------------- | --------- |
| 1 | Raden Pandu Anggono Rasyid  | 025201024 | 
| 2 | Hidayatullah | 5025201031  |
| 3 | Nazhifah El Qolby | 5025201156 |


## General Overview

We make our project by using the Laravel Framework to create a website that has CRUD ( Create, Read, Update, Delete) features alongside our own added functionalities. The Website is TCFess. It is an interactive, community based forum similar to Quora, Reddit, and Twitter Base. Here we can make accounts and post threads, we can also engage in other users’ threads by replying to their respective threads.

The website link is [https://webpro-tcfess.000webhostapp.com](https://webpro-tcfess.000webhostapp.com/)[/](https://webpro-tcfess.000webhostapp.com/)

The Github repository link is <https://github.com/5025201024/WebPro-D>

## Features Analysis

The details of our website’s database design, list of features, screenshots and brief webpage explanation are as written below. These are the features of our website. The explanation of each feature is explained in the next sections.

- Login, logout and registration account (mandatory)
- Make threads
- Edit threads
- Delete threads
- Make reply
- Edit reply
- Delete reply
- Pagination of threads
- Edit profile
- Home page (can see your own threads and replies)
- Search Threads

From our assignment, we have analyzed the needs and business model of this website. We are modeling this website after similar community based forums like Quora, Reddit, and Twitter. We implemented this concept using laravel framework. We have CRUD features including but not limited to login, register, and edit accounts. We also made sure that threads and replies are customizable and deletable. This Laravel framework is an MVC based framework where Model / Database, View / UI, and Controller, are separated so we can focus on each module and code more expressively and elegantly. We have evaluated our website and found that although we have fulfilled the needs and business requirements, we are aware that there are areas where we can improve on this website. We can improve on adding more features like sub-thread, newsletter, etc.

**Landing Page**

This page is the first page that you see when visiting the website. From here, you can login or register to your account.

<img width="468" alt="image" src="https://user-images.githubusercontent.com/80145586/198374190-8c52418a-f5f9-4f6e-b5c2-2537e3c543cd.png">

**Login Page**

This is the login page of the website. Here we can login to our account and if we don’t have an account, we can make one using the link in this page.

<img width="389" alt="image" src="https://user-images.githubusercontent.com/80145586/198374246-989322b7-a589-40d0-913a-3c642f3c404c.png">

**Register Page**

This is the register page of the website. We can register / make a new account to join this website’s community.

<img width="464" alt="image" src="https://user-images.githubusercontent.com/80145586/198374374-f72a4436-9973-4e94-abf0-96319ad32508.png">

**Make Threads**

By clicking the “add question”, you can make and submit a new thread with question and question details.

<img width="287" alt="image" src="https://user-images.githubusercontent.com/80145586/198374420-5a8bdc6f-4259-4d2f-b859-d1bfbd726fef.png">

**Edit and Delete Threads**

If you want to edit your threads, you can do so by clicking the “edit” button. Here you can fix mistakes, do clarifications, and generally make your thread better. 

<img width="254" alt="image" src="https://user-images.githubusercontent.com/80145586/198374458-3f4f45fe-5b8f-4abc-9433-c8213a5a492c.png">

You can delete your thread here by clicking the “Delete” button. Once you’ve deleted your thread, it will be Removed.

**Make, Delete, Edit Reply**

If you have chose a thread available then you can make a reply for that thread. By clicking the answer button you can type your reply and then click the submit button to post it.

<img width="265" alt="image" src="https://user-images.githubusercontent.com/80145586/198374591-633d7587-d943-4f62-afd7-20e81dcdcf0c.png">

Edit Reply By clicking the green button you can edit your reply. After you click it you will be redirected to the page where you can edit your original reply. After you type your new or edited reply you can click the submit button to post it.

By clicking the red button you can delete your reply. After you clicked it your reply will be deleted and a pop up message will appear to tell you that your reply has been deleted successfully.

Pagination of Threads In this website threads will be automatically paginated. After 6 threads you will have to go to the next page by clicking the button at the end of the page. In the next page there will be another threads available.

**Edit Profile**

At top right corner of the page you can find the edit profile button. You can edit your profile by clicking the edit profile button. After you click the edit profile button you will be redirected to the edit profile page then you can edit your profile and click the update button to update your profile information.

<img width="271" alt="image" src="https://user-images.githubusercontent.com/80145586/198374664-0bcd842f-c4f6-4558-890a-9e8352d8b1be.png">

<img width="324" alt="image" src="https://user-images.githubusercontent.com/80145586/198374708-59cdaef0-8733-49c3-baa9-deb1c95a1b43.png">

**Home Page**

In the homepage you can see all of the threads(question) and reply(answer) you have posted in this website.

<img width="468" alt="image" src="https://user-images.githubusercontent.com/80145586/198374785-6840ea4d-07ef-45cb-8f8f-f779dbfea27e.png">


**Search threads**

You can search for a specific thread by typing your question in the search section at the top of the page. After you type your question you can click the search button to search across the website a thread that answers your question. After that you will be redirected to the page containing threads that answer your question.

<img width="311" alt="image" src="https://user-images.githubusercontent.com/80145586/198374836-0a7b98e9-d1b9-4c81-b65e-c57bb0e22450.png">


**Conceptual Data Model (CDM)**

<img width="368" alt="image" src="https://user-images.githubusercontent.com/80145586/198374863-2d60f5b6-dc0e-4efd-8e13-7c53db0a20b5.png">

**Physical Data Model (PDM)**

<img width="330" alt="image" src="https://user-images.githubusercontent.com/80145586/198374894-f815b390-b20b-4b50-8353-c9654af11493.png">

## Contributions
During this assignment, we have worked in unity. The details of our contributions are as follows:

* Raden Pandu Anggono Rasyid  [33%]	: 
    * Website Template
    * Laravel files
    * Report
* Hidayatullah [ 33% ] :
    * Laravel Files
    * CDM & PDM
    * Readme
    * Report
* Nazhifah El Qolby [33%] :
    * Website template
    * Website analysis
    * Report

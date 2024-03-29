## Salon Zen

<img width="1251" alt="image" src="https://github.com/cb010982/ssp1_assignment_salon_zen/assets/113625267/c95172a1-2780-408d-bf60-e7216bcf1ec6">

# Problem and domain

The domain I choose the personal care industry, where beauty related services are provided. <br>
Most talented salons in Sri Lanka, don’t maintain an online based system, which would attract a larger customer base, and inform customers of their products and services. A salon usually attracts a young and middle-aged crowd, who spend most of their time on online services and are too busy to manually make calls to salons to ask them about their services, location, products and so on. <br> <br>

Another problem that salon managers face is the lack of record management. Most Sri Lankan salons would usually answer calls and then either record it on books or sometimes, do not maintain any record at all. This way there are chances of missed appointments leading to bad reputation and customer service. Hence, possibilities of bad word of mouth directly impacting the revenue of such businesses. <br>

If customers have questions to ask regarding the salon, they will have to make many calls, hoping that the salon managers might pick up. The lack of AI chat bots in a world evolving with Artificial Intelligence, makes salons less competitive in a highly competitive market locally as well as on a global scale. <br>

Salons usually do not maintain any analytical record, which would support in their decision making process for the owners of the salon on even pricing, service management, product management and so on. <br>

<img width="1241" alt="image" src="https://github.com/cb010982/ssp1_assignment_salon_zen/assets/113625267/0e38a747-ee9c-4a57-b35b-98178c2a5ca3">

# Solution
Having an online system will mean at anytime, anywhere in the world, users can access the salon, it’s details and maintain a relationship with the salon itself. When all information are present in the website itself, customers don’t miss out on anything.  <br>

By maintaining details of the customer such as their allergies, the salon is able to personally cater to their needs and likings. Services can be customed to avoid allergic reactions and having records of the customer’s appointment patters, will give an idea for the salon staff on how to cater to the customer personally. <br>

The solution has an AI chatbot, that will answer questions the user asks regarding the salon on the spot. Then no user has to be manually dedicated to respond to the questions or inquiries asked by the customers.
Analytics are maintained in the system, so that an overall understanding of the performance of the web application can be grasped via the visual and numerical representation of statistics. <br>

# Future Upgrade Plan Report

The first step of my future upgrade plan would be collecting as much feedback from the users, which will be the most successful form of improving a system. As they are the direct-end users and therefore, if they face issues, regarding any service within the platform, I can use these points to improve my application and have a competitive advantage in the market. Therefore, weekly reviews or emails sent asking feedback on maybe a monthly basis depending on the user’s interactive period can help me track their preferences and negative points to try and improve the system to make it a SaaS solution. <br>

For this purpose I have to make the reviews as engaging as possible for them to fill in, also focusing on minimizing the length of the review as it demotivates a person to fill such a lengthy review.
My next step is to have promotions based on the user’s demographic information like age or birthday etc. Personalized promotions via SMS, would make the customers happy and more motivated to revisit the salon, which will thus increase the revenue of the salon, again making my software competitive in the market. Eg: Sending promotions on birthday’s of the customers and monitoring the customer’s buying patterns and reminding them of a new stock arrival. Even, after a service like manicure is requested, after a period of about 2 weeks after the service, reminding the customer to re-coat their nails. These reminders personalized for their beauty needs is what a customer prefers. My motive in this case is to let the customer go stress free, without having to track her appointments when the system will just remind her. Even on appointment dates, messages like “Don’t forget your appointment scheduled for today from 1pm to 3pm!”, would reduce the stress of customers putting effort to remember their appointments. <br>

<img width="1217" alt="image" src="https://github.com/cb010982/ssp1_assignment_salon_zen/assets/113625267/e1537698-9471-479c-a11a-cb308d1e1768">

Currently I do maintain analytics regarding the website, but a step for upgrading would be sending financial statistical reports based on revenue to the beauty manager on a monthly basis as well as on an annual basis. Most salons in Sri Lanka, manually record their appointments and so they don’t exactly prepare their reports in a proper manner. It would be less stress even for a manager to manually note these incomes, when it will be automatically generated, which would be great for the user. The main aim of my application is to reduce work on the user’s side, which is what any customer of my application would require. <br>

The system currently has security like encryption of passwords, token management, role based systems, email verification, middleware etc. But more security like encrypting the entire database, and having a super admin who is the only authorized person to access the database, would be a safer strategy than the admin handing many functions regarding the database. Furthermore, more verification methods other than email verification like SMS verification would be a good security implementation to reduce the threat level to the system. Finally having an incident response plan is needed to mitigate potential issues that may arise in the system. <br>

<img width="1194" alt="image" src="https://github.com/cb010982/ssp1_assignment_salon_zen/assets/113625267/2a2339ae-6403-4ebc-9d60-a33db71cead6">

Making the system scalable is another important factor before marketing this application. More secure and stable databases should be maintained to reduce downtime of the system. Cloud based databases and load balancing techniques should be used to fix this issue, so that the system can even access a global scale. <br>
Commit to a schedule for regular software updates and maintenance to address bugs, maintaining documentation and maintaining backup is crucial for this type of a system. <br>
With the evolving technology, and the competitive market, I will have to implement AI integrated solutions. Customers should be able to use mobile wallets and any form of contact-less payment strategy rather than the boring form filling for payments. For the customer’s ease I would prefer if virtual try-ons can be used when the client selects a service, maybe like a haircut, they will see what it looks like on them, real-time, so the customers won’t make decisions that would disappoint them.  <br>

Maintaining social media platforms like Instagram, Facebook, TikTok to promote the products and services maintained within the platform, would be an added advantage to the buyer of this software as they have an extra marketing advantage. <br>

<img width="1197" alt="image" src="https://github.com/cb010982/ssp1_assignment_salon_zen/assets/113625267/00a947bc-498d-483e-8a11-e408be528e15">


# Code Implementation

I have used  Laravel, Bootstrap, and AlpineJS for the  user interface and as my database I used SQLite, with the PHP backend. <br>

# Functional requirements <br>
1.	User Authentication and Access Control: <br>

•	Implement user authentication for salon admin, clients and staff separately. <br>
•	Define user roles and permissions to control access to system features and data. <br>

# 2.	Appointment Scheduling: <br>

•	Provide a user-friendly interface for clients to book appointments online. <br>
•	Allow staff to schedule or cancel appointments. <br>
•	Support multiple appointment services (haircut, manicure, massage, etc.). <br>

# 3.	Inventory Management: <br>

•	Manage salon inventory - beauty products. <br>
•	Allow adding, editing, or removing products from the system. <br>

# 4.	Payment Processing: <br>

•	Process payments for products. <br>
•	Calculate and display itemized bills. <br>

# 5.	Manage client details <br>
•	Maintain detailed client profiles with contact information, appointment history, purchasing history and preferences. <br>
•	Clients should be able to change or edit their details. <br>
•	Enable staff to view client records. <br>

# 6.	Questions and Rating: <br>
•	Collect and store client reviews. <br>
•	Use chat bots to answer customer questions. <br>

# Non-functional requirements <br>
1.	Security and Data Protection: <br>
•	Implement security measures to protect client.  <br>

# 2.	Usability: <br>
•	Usability requirements ensure that the system is user-friendly and intuitive: <br>
•	The user interface should be visually appealing and easy to navigate. <br>
•	Response times for user interactions (e.g. appointment booking) should be swift, typically within a few seconds. <br>
•	The system should provide clear and informative error messages to help users understand issues and how to resolve them. <br>

# 3.	Mobile Accessibility/Compatibility: <br>
•	Provide mobile access to the system useful for staff and clients to manage appointments on the go. <br>

# 4.	Availability and Reliability: <br>
•	Ensure that the system is accessible and dependable: <br>
•	The system should have a high level of uptime, with minimal planned downtime for maintenance. <br>
•	Redundancy and failover mechanisms should be in place to ensure system availability even in case of hardware or software failures. <br>

# 5.	Scalability <br>
•	Scalability requirements ensure that the system can handle increased data volume. <br>

# Scope <br>

The domain I chose for this assignment is personal care services, where I took a beauty salon as the scope of my project. I have developed this system in such a way that I have  targeted only people above 18 years of age. This website will cater to the sale of products as well as services. <br>

# Security Features <br>
# Email verification  <br>

1.	Registration of users <br>

	The user’s when registered, will receive, an email verification via mail trap, when the user opens the mail an confirms that it was he/she who registered into the system, then the user can enter the website.  <br>

2.	Password control <br>

	Moreover, even when password reset happens, the user will be sent an email to confirm this action as demonstrated in the pages above. All passwords even in the database, would be encrypted, therefore, even if an unauthorized user get’s access to the database, due to the password being encrypted, the user is not able to get all the user related information and/or manipulate them, which would lead to certain vulnerabilities and data leakages. <br>

# Form Validation <br>
All forms will have necessary validations like required fields, maximum length (eg: mobile number), minimum length. Date validations ,eg: date of birth entered should be at least 18 years from the current date. This ensures, that the user cannot come finalize their action unless it is valid and accurate. Error messages would pop up on the fields. <br>

# User roles and management <br>
Admin and beauty manager have separate credentials that no normal customer can use, as they are saved in the database as received records in the users table. This way, no customer can directly manipulate the database in anyway. Moreover, only the admin has the power and control over deleting records in the database. Furthermore, only the admin has the power of changing the role of the user in any case of maybe adding another admin or maybe another beauty manager. <br>

# Middleware protection <br>
Necessary middleware, redirects users to login page, preventing them accessing webpages that are not directed to them or must be registered to use. Eg: Only admin can handle the admin related pages, likewise no customer can. <br>

# Token authentication <br>
Only the admin has token management powers where when they generate a token, that token will be only be able to use once, if the admin regenerates, this token will be a different one, that is not similar to the one generated before. <br>

# Admin Credentials  <br>

Email : admin02@gmail.com <br>
Password: Senu@123$ <br>


# Beauty Manager Credentials <br>

Email: beautymanager@gmail.com <br>
Password: Senu@123$ <br>

# Target Market Analysis


Sally
Characteristics <br>
•	Sally leads a hectic life with a demanding job and a busy social calendar. <br>
•	She values convenience and efficiency in all aspects of her life. <br>
•	Sally prefers services that save her time and can be scheduled during lunch breaks or after work. <br>

Needs and Goals <br>
•	Convenient online booking for salon appointments. <br>
•	Access to express beauty services, such as quick blowouts or 30-minute facials. <br>
•	An upscale salon environment with a focus on relaxation. <br>

Obstacles <br>
•	Finding answers to the questions she might have regarding the salon and its services within limited time. <br>
•	Easy clicks within the system to get tasks done as she is very busy <br>
•	Sally values her relaxation during salon visits but may find it challenging to achieve this in a busy salon environment. <br>
 
Desires <br>
•	Convenience: Sally desires a convenient efficient and a faster way with fewer steps to book salon appointments online, saving her time and effort. <br>
•	Flexibility: She wishes for flexible scheduling options, including the ability to book appointments during her lunch break or after work (allowing appointment booking access 24/7). <br>
•	Answer Questions: Sally wants to clarify her doubts before deciding her purchase. <br>
•	Privacy and Relaxation: Sally desires a salon environment that prioritizes privacy and relaxation, allowing her to unwind during her beauty treatments. <br>

Taylor
Characteristics <br>
•	Taylor is highly fashion-conscious and always wants to look her best. <br>
•	She enjoys experimenting with the latest beauty trends and products. <br>
•	Taylor often shares her salon experiences on social media to her followers. <br>

Needs and Goals <br>
•	Trendy and creative hairstyling and makeup services. <br>
•	Access to a wide range of high-quality beauty products. <br>
•	A salon with a stylish and Instagram-worthy interior for photo opportunities. <br>
•	Friendly and knowledgeable staff who can offer beauty tips and advice. <br>

Obstacles <br>
•	Staying up-to-date with the constantly evolving beauty trends can be challenging for Taylor. <br>
•	While Taylor enjoys experimenting with beauty trends, she may lack access to expert advice on the latest techniques and products. <br>
•	Taylor may face difficulties in finding salons that provide the aesthetic and ambiance suitable for her social media content. <br>

Desires <br>

•	Trendy Services: Taylor desires access to trendy and creative hairstyling and makeup services that keep her looking fashion-forward. <br>
•	Product Selection: She wishes to access a wide range of high-quality beauty products to enhance her beauty routine. <br>
•	Instagram-Worthy Salon: Taylor wants a salon with a stylish and Instagram- worthy interior for creating visually appealing content. <br>
•	Expert Guidance: She desires friendly and knowledgeable salon staff who can offer beauty tips, advice, and recommendations on the latest trends. <br>
•	Social Media Promotions: Taylor would appreciate promotions and discounts for sharing her salon experiences on her social media platforms, helping her maintain her influencer status. <br>


# Internal and external stakeholders  <br>
# Internal stakeholders <br>

Salon Owner <br>
•	Role: The owner would provide the vision and direction for the salon, make strategic decisions, manage finances, and monitor the overall operations. <br>
•	Expectations: Owners expect profitability, a strong and loyal customer base, effective management and marketing strategies. <br>

Beauty Manager / Employer <br>
•	Role: Manage appointments and carts of the clients, maintain client relationships, and contribute to the salon's success. <br>
•	Expectations: Employees expect fair pay for what they do, opportunities for professional development, a safe and supportive work environment, and ability to view and conveniently manage customer appointments. <br>

Administrator <br>
•	Role: Handling inquiries, maintaining web platform, users and their roles to ensure the smooth operation of the system. <br>
•	Expectations: They expect fair pay, a web platform for the administrator to work on with admin roles and powers and clear communication from management. <br>


# External stakeholders <br>

Clients <br>
•	Role: Clients are the primary source of revenue for the salon. They receive various beauty and grooming services. <br>
•	Expectations: Clients expect high-quality services, a pleasant and clean environment, skilled and friendly staff, reasonable pricing, appointment availability and awareness of promotion. <br>


Suppliers <br>
•	Role: Suppliers provide beauty products, equipment, and supplies essential for salon services. <br>
•	Expectations: They expect regular orders and timely payments. <br>


Competitors <br>
•	Role: Identifying new and existing salons and their level of competition in the same geographic area. <br>
•	Expectations: They expect fair competition, adherence to industry standards, and respect for each other's businesses. <br>

# Installation <br>
# You should already have these to run the project <br>

Composer <br>
Node.js <br>
NPM <br>
PHP <br>
Sqlite (or you can use )MySQL <br>
XAMPP or WAMP server can be used for PHP and MySQL. <br>

# Clone the repo<br>
git clone https://github.com/cb010982/ssp1_assignment_salon_zen<br>

cd to where you downloaded the folder

# Run the following 
Composer install<br>
npm install<br>
Create a new .env file and copy the .env.example file and paste it to the .env file<br>
Create a database and add the database credentials to the .env file<br>
If you are using sqlite use laravel docs and follow the instructions https://laravel.com/docs/10.x/database#sqlite-configuration<br>
Add your Mailtrap details<br>
Add your OpenAI details<br>


# Run the migrations<br>
php artisan migrate<br>

# Run the project<br>
php artisan serve<br>
Type http://127.0.0.1:8000 on the url of your web browser

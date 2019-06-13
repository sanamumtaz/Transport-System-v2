# Transport-System-v2
Web development/Database project
### HTML, CSS, PHP, MySQL
Our website is made to facilitate NUST students in registering for NUST transport system. Students can register online, request for route availability, and after registration, have a portal where they can log in to view their route, van and driver’s detail. This website also benefits Admin of the system to keep record of routes, vans, drivers, students and feedbacks given by students.
## Back-end
MySQL database is created which is linked through PHP.
### EERD
![image](https://user-images.githubusercontent.com/35191030/59445658-78970300-8e19-11e9-8289-4b9f0a02ed43.png)
![image](https://user-images.githubusercontent.com/35191030/59445853-ca3f8d80-8e19-11e9-98d1-697bef97cfc5.png)
### ASSUMPTIONS:
- Route must have at least 4 students going on it, otherwise, it would not have that much need to be created.
- Vans are of two types: Hiace and Carry van. Hiace and Carry vans have capacity of 15 and 7 students respectively. Van travels on one route only.
- There are some vans that are not assigned to any route which means they are still available in future.
- Password must have length greater than five. **_Passwords are sha512 encrypted._**

Everything else is understandable through EERD.
## Front-end
It is simple HTML CSS based website. It is **not responsive**.
![image](https://user-images.githubusercontent.com/35191030/59446571-32db3a00-8e1b-11e9-83be-36608ea766f5.png)
![image](https://user-images.githubusercontent.com/35191030/59446638-52726280-8e1b-11e9-861f-14a049b9feaa.png)
![image](https://user-images.githubusercontent.com/35191030/59446719-77ff6c00-8e1b-11e9-90ee-814ad084e651.png)
![image](https://user-images.githubusercontent.com/35191030/59446803-9e250c00-8e1b-11e9-8c36-fec0294eaa73.png)
![image](https://user-images.githubusercontent.com/35191030/59449009-b39c3500-8e1f-11e9-806c-ac5e16e47ee8.png)

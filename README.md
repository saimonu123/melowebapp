## Dependencies
**-> PHP 7 
**-> MySQL 
**-> Chrome (Or Edge, IE)**

## Installation

1. Firstly i have created a linux VM in azure portal and installed docker into it.

2. i have deployed nignx-php-latest server with port 80 container for deploying the php application into it.

3. Created another container mysql  for database with port 3306

4. Then deployed portainer.io with port 9000 in another container. this portainer is used to view the docker functions in GUI.

Note:- this web application isnt developed by me. i took it from github public repository.

5. i have also created newuser and new database and dumped the acutual db into new one.

6. we can view the docker GUI here http://20.39.36.176:9000 and also the containers. we can also access the console.

7. we can view the running applications with the reserved public IP 20.39.36.176

8. for deploying the application into orchestrated layer i have choosed AKS azure kubernetes services.

9. Where i have written the deployment.yml for deploying the application. mysql-deployment.yml for database deployment and also service.yml for loadbalancer.

10. But i couldnt make to run in AKS for some issues. 


For accessing portainer:- 

IP:- http://20.39.36.176:9000

TO access the application which is running on docker perfectly

IP:- 20.39.36.176

username:- admin
password:- sai@12345

To access application deployed in kubernetes:- 

sai@sai-pc:~/webapp/melowebapp$ kubectl get service web-svc
NAME      TYPE           CLUSTER-IP    EXTERNAL-IP      PORT(S)
web-svc   LoadBalancer   10.0.20.231   52.188.131.190   80:31144/TCP 

sai@sai-pc:~/webapp/melowebapp$ kubectl get service melomysql
NAME        TYPE        CLUSTER-IP   EXTERNAL-IP   PORT(S)    AGE
melomysql   ClusterIP   None         <none>        3306/TCP

#I have tried my best to make the application run in AKS but i couldnt make it.

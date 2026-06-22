# A Smart Mobility Solution for Realtime Bus Tracking ! 

## Project Description:

Developed a real-time bus tracking system using GPS data from the driver's mobile device. The system provides route-based bus tracking, ETA calculation, and map integration. Users can search buses using route information and monitor current bus locations in real time.


#### login:

username:admin

password:admin


### Set Up:

#### Traccar client server setup 

1.Download Traccar Client server

[Download Link](https://release-assets.githubusercontent.com/github-production-release-asset/4038949/62b94418-a447-4ea7-9f15-f4ff8d00189e?sp=r&sv=2018-11-09&sr=b&spr=https&se=2026-04-04T11%3A52%3A24Z&rscd=attachment%3B+filename%3Dtraccar-windows-64-6.12.2.zip&rsct=application%2Foctet-stream&skoid=96c2d410-5711-43a1-aedd-ab1947aa7ab0&sktid=398a6654-997b-47e9-b12b-9515b896b4de&skt=2026-04-04T10%3A51%3A38Z&ske=2026-04-04T11%3A52%3A24Z&sks=b&skv=2018-11-09&sig=XW3t6eaelsIxMI37WtAs%2FyyzGpuIwk4FYDsGTffmv3A%3D&jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmVsZWFzZS1hc3NldHMuZ2l0aHVidXNlcmNvbnRlbnQuY29tIiwia2V5Ijoia2V5MSIsImV4cCI6MTc3NTMwNDAwMSwibmJmIjoxNzc1MzAwNDAxLCJwYXRoIjoicmVsZWFzZWFzc2V0cHJvZHVjdGlvbi5ibG9iLmNvcmUud2luZG93cy5uZXQifQ.7NJdX6iVOQ-9rvhh_Sp5jt2Tvh5nvI2O9r4NLqIyuSc&response-content-disposition=attachment%3B%20filename%3Dtraccar-windows-64-6.12.2.zip&response-content-type=application%2Foctet-stream)

2.Replace Traccar conf with custom conf (dir project_folder/note/custom_traccar_conf/traccar.xml)

3.Run sql_error_device_time sql command on mysql admin pannel
    (for bypassing error)

4.Run Traccar Services> traccar> start

```bash
browse : localhost://8080
```
    
5.Set bus name & bus numbers

```bash
    Name:Bus name
    Device Identifier<< Bus number 
```

6.Tunneling Traccar Server using CloudFlared 

    [Download Link](https://release-assets.githubusercontent.com/github-production-release-asset/106867604/218dc8be-2fac-44b9-ae80-2baf647c2c28?sp=r&sv=2018-11-09&sr=b&spr=https&se=2026-04-20T10%3A49%3A45Z&rscd=attachment%3B+filename%3Dcloudflared-windows-amd64.exe&rsct=application%2Foctet-stream&skoid=96c2d410-5711-43a1-aedd-ab1947aa7ab0&sktid=398a6654-997b-47e9-b12b-9515b896b4de&skt=2026-04-20T09%3A49%3A25Z&ske=2026-04-20T10%3A49%3A45Z&sks=b&skv=2018-11-09&sig=97XiMbbv5M6lN15SfWP40UP3uSd%2FsMJ%2B4NIucCY2rTU%3D&jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmVsZWFzZS1hc3NldHMuZ2l0aHVidXNlcmNvbnRlbnQuY29tIiwia2V5Ijoia2V5MSIsImV4cCI6MTc3NjY4MDYzMywibmJmIjoxNzc2Njc4ODMzLCJwYXRoIjoicmVsZWFzZWFzc2V0cHJvZHVjdGlvbi5ibG9iLmNvcmUud2luZG93cy5uZXQifQ.-hBfxd_QnPMK5DP3-kIY6dTnEBk1zFoo2SjukFggYKM&response-content-disposition=attachment%3B%20filename%3Dcloudflared-windows-amd64.exe&response-content-type=application%2Foctet-stream)
    
```bash
    >> rename as cloudflared.exe
```

7.Run cammand on cmd :

```bash
    cd c:/
    cloudflared tunnel --url http://localhost:8080
    >>https://random.trycloudflare.com
```

8.Paste  the generated url in Traccar client mobile application 

   [Download Link](https://play.google.com/store/apps/details?id=org.traccar.client)

   >>Server URL

9.Device Identifier << Bus number 
    enable all location options 



#### Main Project setup 

1.Place project in 

```bash
c:/xamp/htdoc/
```

2.Run xamp control panel 
    mysql & apache 
    
  ```bash
  browse : localhost:/project_folder_name
```

3.Run database.sql db cmds 

4.Tunneling project using CloudFlared 

    [Download Link](https://release-assets.githubusercontent.com/github-production-release-asset/106867604/218dc8be-2fac-44b9-ae80-2baf647c2c28?sp=r&sv=2018-11-09&sr=b&spr=https&se=2026-04-20T10%3A49%3A45Z&rscd=attachment%3B+filename%3Dcloudflared-windows-amd64.exe&rsct=application%2Foctet-stream&skoid=96c2d410-5711-43a1-aedd-ab1947aa7ab0&sktid=398a6654-997b-47e9-b12b-9515b896b4de&skt=2026-04-20T09%3A49%3A25Z&ske=2026-04-20T10%3A49%3A45Z&sks=b&skv=2018-11-09&sig=97XiMbbv5M6lN15SfWP40UP3uSd%2FsMJ%2B4NIucCY2rTU%3D&jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmVsZWFzZS1hc3NldHMuZ2l0aHVidXNlcmNvbnRlbnQuY29tIiwia2V5Ijoia2V5MSIsImV4cCI6MTc3NjY4MDYzMywibmJmIjoxNzc2Njc4ODMzLCJwYXRoIjoicmVsZWFzZWFzc2V0cHJvZHVjdGlvbi5ibG9iLmNvcmUud2luZG93cy5uZXQifQ.-hBfxd_QnPMK5DP3-kIY6dTnEBk1zFoo2SjukFggYKM&response-content-disposition=attachment%3B%20filename%3Dcloudflared-windows-amd64.exe&response-content-type=application%2Foctet-stream)
    
 ```bash   
    >> rename as cloudflared.exe
  ```  

5.Run cammand on cmd :

```bash
    cd c:/
    cloudflared tunnel --url http://localhost:80
    browse : https://random.trycloudflare.com/project_name/
```


    
    
 
 
    
    
    

 

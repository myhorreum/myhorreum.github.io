---
layout: project
type: project
image: images/pool.jpg
title: IP Pool Mix-Up
permalink: projects/ip-pool
# All dates must be YYYY-MM-DD format!
date: 2021-01-14
labels:
  - Troubleshooting
  - Digging Deeper
summary: A compromised password turned out to most likely be a DNS issue resulting from recycled VPN IPs. 
---
<img class="ui image" src="../images/pool.gif">

## Back-Story:
<img class="ui image" src="../images/jose-login.png">

The above image is a screeshot from what I saw after logging into my work VM at TASI (check more on my experience with TASI [here]({{ site.baseurl }}/projects/tasi). I was initially worried that my password was known and used to sign in from Jose's workstation. Obviously, no one would ever want their password to be known by others so I asked my supervisor about this and he told me that it most likely was TASI's firewall DNS associating old IPs with hostnames. Thomas told me to dig a little deeper to confirm this. This post is my experience doing so.

## Check Audit Logs
<img class="ui image" src="../images/audit-log.png">

The first step to take is to check the audit logs on the VM. Audit logs provide granular details in regards to what is going on on the system. In this case I did a simple `grep` command to isolate logs containing `jose`. The login event was displayed on the screen and gave me further information. Most importantly, it displayed that the login from `jose-laptop.uhtasi.local` had an IP address of `10.100.10.81`.

## Check the ELK-Stack:
I decided to look in Kibana to see the login patterns of Jose and I. I found activity from Jose when he was assigned the 10.100.10.81 IP. I then wanted to see what IP I had been assigned. It turned out that I had been given the 10.100.10.81 IP as well. 

***************************************************************************************

*This project was developed in the [Eclipse IDE](https://www.eclipse.org/) and utilized the [EZ Graphics Library](http://www2.hawaii.edu/~dylank/ics111/) created by graduate student Dylan Kobayashi.*


<!-- <img class="ui image" src="../images/hansel_uns_gretel.jpgg"> -->

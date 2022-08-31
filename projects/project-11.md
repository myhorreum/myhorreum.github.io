---
layout: project
type: project
image: images/zimbra.png
title: Attacks on Mail Server
permalink: projects/mail-server-attacks
# All dates must be YYYY-MM-DD format!
date: 2022-08-30
labels:
  - Hacking
  - Authentication Attempts
  - Zimbra Mail Server
  - ELK Stack
  - TASI-PHIDC
summary: I experienced mass malicious authentication attempts to TASI-PHIDC's mail server.
---

<img class="ui image" src="../images/hack.jpg">

## What Happened?

I was using the ELK Stack to help see and track failed authentication attempts to TASI-PHIDC's servers. I noticed that we had many [4625-events]({{ site.baseurl }}/projects/4625-Example.txt) from users to 128.171.103.6 and I was initially confused. I then realized that that IP corresponded to TASI-PHIDC's mail server. The mail server is the company's only public facing server due to the need for employees to access email outside of TASI's private networks. This does leave the server to be targetted by hackers however.

I then installed filebeat on the Zimbra linux server in order to send logs from that server. This is so that I could see the IPs associated with the login attempts in order to block them. I also also used ELK's GeoIP feature in order to track some of the IPs. This required me to dissect the logs in the Logstash configuration file, but ran into some issues with that. What was shocking to me was how many attempts the mail server would receive. I also had questions like *How did hackers obtain TASI employee usernames?* I realized they could have obtained a newsletter or something similar that contained employee usernames.

Here are examples of authentication attempts formatted in our ELK implementation (I also recommend zooming the reports out a little):

[08.20.2022-IPs]({{ site.baseurl }}/projects/08.20.2022-IPs.txt)

[08.20.2022-CorrespondingUsers]({{ site.baseurl }}/projects/08.20.2022-users.txt)

[08.28.2022-IPs]({{ site.baseurl }}/projects/08.28.2022-IPs.txt)

[08.28.2022-CorrespondingUsers]({{ site.baseurl }}/projects/08.28.2022-users.txt)

Because the SASL authentication failures split the user and IP into consecutive logs, it requires two separate reports. Also I wanted to map the IPs to their geolocation (if they are outside of Hawaii they are most likely malicious), however my dissect statement could only cover one type of SASL format. This is a report where some of the geolocations were successfully mapped however:

[08.17.2022-IPs]({{ site.baseurl }}/projects/08.17.2022-IPs.txt)

If you still want to map the IP, you can use sites like [these](https://www.iplocation.net/).

This situation illustrates why 2-factor authentication isn't such a bad idea.

***************************************************************************************
***************************************************************************************

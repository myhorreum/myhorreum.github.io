---
layout: essay
type: essay
title: Hawaiian Telcom Cybersecurity Meeting
# All dates must be YYYY-MM-DD format!
date: 2023-01-00
labels:
  - Back-Up Strategies
  - Legacy Systems
  - Workplace Policy
---

## Summarizing Hawaiian Telcom Cybersecurity Meeting w/ Michael Morales and Michael Taratko:

I decided to sit in for this meeting since I had nothing else to do. These are basic notes - 

2 local backups + 1 offsite (perhaps in cloud)
Has your environment changed recently?
Security challenges of going hybrid (log data is now not in one place)
A hybrid infrastructure, or hybrid cloud is an IT infrastructure design and environment made up of a mix of on-premises data centers, private clouds and/or public clouds
Make sure your policies are up to date (protocols written for old password polices for example)
Domain Controllers - tracks login/outs to your Enterprise Windows servers should be sent to a SIEM/log management tool

Went over SIEM and Domain Controllers which I am already familiar with from TASI

In Hawaii, Older/Legacy systems (clock drift is one problem)
   - Setup NTP (Network Time Protocol)

Testing, Patching, Configuration Management
PCI & Credit card data for End-Of-Life equipment
Patch as many things as you can but find solutions for things you cannot patch in your environment like 2003 Windows servers
Patching & Configuration Management are cost effective because many sysadmins are already familiar with those processes
In some cases cybersecurity insurance rates are so high that for some (generally smaller) companies working on their own solutions is more feasible

Organizations can follow a AUP (Acceptable Use Policy) for workstations (let them know the workstation may also be monitored)


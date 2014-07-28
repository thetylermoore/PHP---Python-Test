#!/usr/bin/python
# coding: utf-8
import pexpect
import time
child = pexpect.spawn('telnet 172.20.105.213 2001');
time.sleep(2);
child.sendline ('1!');
#time.sleep(2);
#child.expect ('Chn2');
#time.sleep(2);
#child.sendline ('2!');
#print "Input 1"

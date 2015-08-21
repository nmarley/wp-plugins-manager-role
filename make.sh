#!/bin/bash

# cleanup from previous
rm wp-plugins-manager-role.zip

# make new dir & copy plugin file(s)
mkdir wp-plugins-manager-role && cp -a *php wp-plugins-manager-role 

# zip it up
zip -r wp-plugins-manager-role wp-plugins-manager-role 

# rm transient dir
rm -fr wp-plugins-manager-role


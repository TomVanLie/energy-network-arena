#!/bin/bash

# Use absolute paths for files
JAR_FILE="/var/energy-network-arena/meter/DATEL-1.4.0-Server-osf.jar"
TEST_OBJECTS_FILE="/var/energy-network-arena/meter/Corinex-Cloned-Custom.xml"
SERVER_CONFIG_FILE="/var/energy-network-arena/meter/serverConf.xml"

/usr/bin/java -jar "$JAR_FILE" SO -w=1 -f "$TEST_OBJECTS_FILE" -c "$SERVER_CONFIG_FILE" -v -r -osf www
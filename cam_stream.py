import os
import subprocess
# Replace the path of mjpg-streamer, with your mjpg-stream path
os.chdir('/home/pi/mjpg-streamer-code-182/mjpg-streamer/')
os.putenv('LD_LIBRARY_PATH','/home/pi/mjpg-streamer-code-182/mjpg-streamer/')
a=subprocess.Popen('./mjpg_streamer -i "input_uvc.so -d /dev/video0 -y" -o "output_http.so -w ./www -c admin:test123"',shell=True,stdout=subprocess.PIPE)

import os
import subprocess
a=subprocess.Popen(['ps', 'aux'],stdout=subprocess.PIPE)
b=subprocess.Popen(['awk', '/mjpg_streamer/ {print $2}'],stdin=a.stdout,stdout=subprocess.PIPE)
pid = b.communicate()[0].strip('\n').split('\n')[:-1]
[ os.kill(int(x),9) for x in pid ]

dependencies 

sudo apt-get install libjpeg8-dev subversion imagemagick

you need to install mjpg_streamer  

wget http://sourceforge.net/code-snapshots/svn/m/mj/mjpg-streamer/code/mjpg-streamer-code-182.zip

unzip mjpg-streamer-code-182.zip

cd mjpg-streamer-code-182/mjpg-streamer

make 

export LD_LIBRARY_PATH=/home/pi/mjpg-streamer-code-182/mjpg-streamer/

./mjpg_streamer -i "input_uvc.so -d /dev/video0 -y" -o "output_http.so -w ./www"



then in browser http://localhost:8080?action=stream   for live stream 

for snapshort   http://localhost:8080?action=snapshot



 To enable username:password

./mjpg_streamer -i "input_uvc.so -d /dev/video0 -y" -o "output_http.so -w ./www -c admin:test123"

for more help see start.sh

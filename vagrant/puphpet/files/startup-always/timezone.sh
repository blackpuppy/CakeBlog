#!/usr/bin/env bash

# # echo Asia/Shanghai | sudo tee /etc/timezone
# # echo Etc/UTC | sudo tee /etc/timezone
# # sudo dpkg-reconfigure --frontend noninteractive tzdata

# # Set the Timezone to something useful
# echo "Setting timezone to Asia/Shanghai ..."

# echo Asia/Shanghai | sudo tee /etc/timezone && sudo dpkg-reconfigure --frontend noninteractive tzdata

# echo "Set timezone to Asia/Shanghai ..."

# # how to put pipeline inside if condition?
# # if [ echo Asia/Shanghai | sudo tee /etc/timezone && sudo dpkg-reconfigure --frontend noninteractive tzdata ]; then
# # 
# #     #sudo cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime
# # 
# #	echo "Set timezone to Asia/Shanghai ..."
# # fi

echo "Setting timezone to Asia/Shanghai ..."
echo Asia/Shanghai > /etc/timezone
dpkg-reconfigure --frontend noninteractive tzdata

echo "Setting locale to UTF-8 ..."
locale-gen en_US.UTF-8
update-locale LANG=en_US.UTF-8 LC_ALL=en_US.UTF-8

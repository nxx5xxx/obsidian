일반적으로 /etc/fstab파일을 변경해주면된다
맨아래 코드3개는 예제


# /etc/fstab: static file system information.
#
# Use 'blkid' to print the universally unique identifier for a
# device; this may be used with UUID= as a more robust way to name devices
# that works even if disks are added and removed. See fstab(5).
#
# systemd generates mount units based on this file, see systemd.mount(5).
# Please run 'systemctl daemon-reload' after making changes here.
#
# <file system> <mount point>   <type>  <options>       <dump>  <pass>
# / was on /dev/nvme0n1p1 during installation
UUID=5d677811-6605-4128-85bd-02abb3fb1887 /               ext4    errors=remount-ro 0       1
/dev/sda1       /ext/Barracuda2TB       ext4    defaults        0       2
/dev/sdb1       /ext/YELLOW             ext4    defaults        0       2
/dev/sdc1       /ext/NVME\040backup     ext4    defaults        0       2

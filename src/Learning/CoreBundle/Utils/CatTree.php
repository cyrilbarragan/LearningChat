<?php

namespace Learning\CoreBundle\Utils;

class CatTree
{
    protected $tree = array();

    public function __construct()
    {
        $this->build();
    }

    public function build()
    {
        $this->tree['2014-11-03'] = array(
            'Box5' => array(
                array('badge' => '224ADB', 'time' => '11:47:58', 'bal' => '9', 'cam' => 'ch02'),
                array('badge' => '233F78', 'time' => '11:51:37', 'bal' => '9', 'cam' => 'ch02'),
                array('badge' => '1FA5B3', 'time' => '13:31:03', 'bal' => '9', 'cam' => 'ch02'),
                array('badge' => '2D58D6', 'time' => '12:24:09', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '2D58AA', 'time' => '11:57:43', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '233F61', 'time' => '11:47:27', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '2D66C5', 'time' => '14:48:10', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '2D6E16', 'time' => '11:53:28', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '232080F', 'time' => '11:49:32', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '232080', 'time' => '12:10:10', 'bal' => '10', 'cam' => 'ch04'),
            ),
            'Box6' => array(
                array('badge' => '233F6E', 'time' => '13:05:01', 'bal' => '11', 'cam' => 'ch0'),
                array('badge' => '234B34', 'time' => '13:09:04', 'bal' => '11', 'cam' => 'ch0'),
                array('badge' => '17DA9F', 'time' => '13:21:22', 'bal' => '11', 'cam' => 'ch0'),
                array('badge' => '23211B', 'time' => '12:52:47', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '231FA8', 'time' => '13:30:41', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '2D2E18', 'time' => '17:18:11', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '234937', 'time' => '12:57:35', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '23024',  'time' => '13:04:56', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '1FC66A', 'time' => '13:18:37', 'bal' => '12', 'cam' => 'ch0'),
            ),
            'Box7' => array(
                array('badge' => '234AB3', 'time' => '11:54:56', 'bal' => '14', 'cam' => 'ch0'),
                array('badge' => '2D4ECB', 'time' => '16:24:26', 'bal' => '13', 'cam' => 'ch0'),
                array('badge' => '2D208B', 'time' => '19:35:55', 'bal' => '13', 'cam' => 'ch0'),
                array('badge' => '2D1F92', 'time' => '14:54:55', 'bal' => '14', 'cam' => 'ch0'),
                array('badge' => '1B808',  'time' => '13:34:47', 'bal' => '13', 'cam' => 'ch0'),
                array('badge' => '231FBC', 'time' => '16:27:59', 'bal' => '14', 'cam' => 'ch0'),
                array('badge' => '230311', 'time' => '11:50:29', 'bal' => '14', 'cam' => 'ch0'),
                array('badge' => '234A7F', 'time' => '12:02:40', 'bal' => '14', 'cam' => 'ch0'),
            ),
            'Box8' => array(
                array('badge' => '2D58DB', 'time' => '11:47:38', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '231FA3', 'time' => '11:52:51', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '2D3CBA', 'time' => '11:56:28', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '232029', 'time' => '12:03:26', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '233F93', 'time' => '12:35:40', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '1FC6A6', 'time' => '14:59:13', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '23493A', 'time' => '16:45:09', 'bal' => '16', 'cam' => 'ch01'),
                array('badge' => '234B09', 'time' => '17:43:07', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '5A00CA', 'time' => '11:49:50', 'bal' => '16', 'cam' => 'ch01'),
                array('badge' => '23206A', 'time' => '14:03:28', 'bal' => '16', 'cam' => 'ch01'),
            )
        );
        $this->tree['2014-11-04'] = array(
            'box5' => array(
                array('badge' => '234ADB', 'time' => '13:10:01', 'bal' => '9', 'cam' => 'ch02'),
                array('badge' => '233F78', 'time' => '11:47:09', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '1FA5B3', 'time' => '12:34:35', 'bal' => '9', 'cam' => 'ch02'),
                array('badge' => '2D58D6', 'time' => '14:27:08', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '2D58AA', 'time' => '14:08:26', 'bal' => '9', 'cam' => 'ch02'),
                array('badge' => '233F61', 'time' => '12:05:41', 'bal' => '9', 'cam' => 'ch02'),
                array('badge' => '2D66C5', 'time' => '12:23:49', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '2D6E16', 'time' => '14:09:08', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '23208F', 'time' => '14:43:15', 'bal' => '10', 'cam' => 'ch04'),
                array('badge' => '232080', 'time' => '14:33:34', 'bal' => '10', 'cam' => 'ch04'),
            ),
            'box6' => array(
                array('badge' => '233F6E', 'time' => '15:18:35', 'bal' => '11', 'cam' => 'ch0'),
                array('badge' => '234B34', 'time' => '14:07:49', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '17DA9F', 'time' => '17:04:14', 'bal' => '11', 'cam' => 'ch0'),
                array('badge' => '23211B', 'time' => '13:03:46', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '231FA8', 'time' => '13:24:11', 'bal' => '11', 'cam' => 'ch0'),
                array('badge' => '2D2E18', 'time' => '15:26:47', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '234937', 'time' => '13:06:54', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '232024', 'time' => '13:13:27', 'bal' => '12', 'cam' => 'ch0'),
                array('badge' => '1FC66A', 'time' => '12:48:35', 'bal' => '12', 'cam' => 'ch0')
            ),
            'box7' => array(
                array('badge' => '234AB3', 'time' => '15:07:31', 'bal' => '13', 'cam' => 'ch0'),
                array('badge' => '2D4ECB', 'time' => '13:59:45', 'bal' => '14', 'cam' => 'ch0'),
                array('badge' => '2D208B', 'time' => '16:02:22', 'bal' => '14', 'cam' => 'ch0'),
                array('badge' => '2D1F92', 'time' => '12:57:41', 'bal' => '13', 'cam' => 'ch0'),
                array('badge' => '1B808',  'time' => '15:33:53', 'bal' => '13', 'cam' => 'ch0'),
                array('badge' => '231FBC', 'time' => '14:44:33', 'bal' => '14', 'cam' => 'ch0'),
                array('badge' => '230311', 'time' => '15:19:43', 'bal' => '13', 'cam' => 'ch0'),
                array('badge' => '234A7F', 'time' => '12:46:36', 'bal' => '13', 'cam' => 'ch0'),
            ),
            'box8' => array(
                array('badge' => '2D58DB', 'time' => '13:37:49', 'bal' => '16', 'cam' => 'ch01'),
                array('badge' => '231FA3', 'time' => '14:47:13', 'bal' => '16', 'cam' => 'ch01'),
                array('badge' => '2D3CBA', 'time' => '13:28:15', 'bal' => '16', 'cam' => 'ch01'),
                array('badge' => '232029', 'time' => '13:19:20', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '233F93', 'time' => '13:34:41', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '1FC6A6', 'time' => '11:52:29', 'bal' => '16', 'cam' => 'ch01'),
                array('badge' => '23493A', 'time' => '12:57:03', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '234B09', 'time' => '15:11:23', 'bal' => '16', 'cam' => 'ch01'),
                array('badge' => '5A00CA', 'time' => '12:38:42', 'bal' => '15', 'cam' => 'ch03'),
                array('badge' => '23206A', 'time' => '15:51:24', 'bal' => '16', 'cam' => 'ch01'),
            )
        );
        $this->tree['2014-11-05'] = array(
            'box5' => array(
                array('badge' => '234ADB', 'time' => '11:42:18', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '233F78', 'time' => '13:48:25', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '1FA5B3', 'time' => '11:48:59', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '2D58D6', 'time' => '14:01:02', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '2D58AA', 'time' => '15:34:28', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '233F61', 'time' => '11:33:26', 'bal' =>  9, 'cam' => 'ch02'),
                array('badge' => '2D66C5', 'time' => '11:33:30', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '2D6E16', 'time' => '14:55:45', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '23208F', 'time' => '11:39:41', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '232080', 'time' => '15:02:04', 'bal' => 10, 'cam' => 'ch01'),
            ),
            'box6' => array(
                array('badge' => '233F6E', 'time' => '12:40:15', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '234B34', 'time' => '12:51:44', 'bal' => 12, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '17DA9F', 'time' => '13:40:16', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '23211B', 'time' => '12:40:18', 'bal' => 12, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '231FA8', 'time' => '15:37:28', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '2D2E18', 'time' => '13:01:32', 'bal' => 12, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '234937', 'time' => '12:42:29', 'bal' => 12, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '232024', 'time' => '14:05:22', 'bal' => 12, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '1FC66A', 'time' => '13:51:14', 'bal' => 11, 'cam' => 'ch0'),
            ),
            'box7' => array(
                array('badge' => '234AB3', 'time' => '12:48:39', 'bal' => 14, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '2D4ECB', 'time' => '17:08:21', 'bal' => 14, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '2D208B', 'time' => '15:32:43', 'bal' => 14, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '2D1F92', 'time' => '18:13:40', 'bal' => 14, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '1B808', 'time'  => '12:47:32', 'bal' => 13, 'cam' => 'ch0'),
                array('badge' => '231FBC', 'time' => '14:11:08', 'bal' => 14, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '230311', 'time' => '15:20:07', 'bal' => 14, 'cam' => 'ch0', 'avance' => '01:06:00'),
                array('badge' => '234A7F', 'time' => '13:22:48', 'bal' => 14, 'cam' => 'ch0', 'avance' => '01:06:00'),
            ),
            'box8' => array(
                array('badge' => '2D58DB', 'time' => '11:37:47', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '231FA3', 'time' => '11:37:50', 'bal' => 15, 'cam' => 'ch03'),
                array('badge' => '2D3CBA', 'time' => '14:17:07', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '232029', 'time' => '11:46:22', 'bal' => 15, 'cam' => 'ch03'),
                array('badge' => '233F93', 'time' => '14:56:32', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '1FC6A6', 'time' => '12:36:44', 'bal' => 15, 'cam' => 'ch03'),
                array('badge' => '23493A', 'time' => '11:57:30', 'bal' => 15, 'cam' => 'ch03'),
                array('badge' => '234B09', 'time' => '15:04:58', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '5A00CA', 'time' => '14:51:14', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '23206A', 'time' => '12:05:03', 'bal' => 16, 'cam' => 'ch01'),
            ),
        );
        $this->tree['2014-11-06'] = array(
            'box5' => array(
                array('badge' => '234ADB', 'time' => '11:43:52', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '233F78', 'time' => '12:51:17', 'bal' => 9, 'cam' => 'ch02'),
                array('badge' => '1FA5B3', 'time' => '21:51:20', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '2D58D6', 'time' => '17:32:45', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '2D58AA', 'time' => '14:31:23', 'bal' => 9, 'cam' => 'ch02'),
                array('badge' => '233F61', 'time' => '11:45:36', 'bal' => 9, 'cam' => 'ch02'),
                array('badge' => '2D66C5', 'time' => '12:19:15', 'bal' => 9, 'cam' => 'ch02'),
                array('badge' => '2D6E16', 'time' => '14:41:15', 'bal' => 9, 'cam' => 'ch02'),
                array('badge' => '23208F', 'time' => '16:01:30', 'bal' => 10, 'cam' => 'ch01'),
                array('badge' => '232080', 'time' => '11:48:57', 'bal' => 9, 'cam' => 'ch02'),
            ),
            'box6' => array(
                array('badge' => '233F6E', 'time' => '12:43:11', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '234B34', 'time' => '12:47:42', 'bal' => 12, 'cam' => 'ch0'),
                array('badge' => '17DA9F', 'time' => '13:05:29', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '23211B', 'time' => '13:23:45', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '231FA8', 'time' => '12:42:59', 'bal' => 12, 'cam' => 'ch0'),
                array('badge' => '2D2E18', 'time' => '12:50:43', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '234937', 'time' => '12:55:12', 'bal' => 11, 'cam' => 'ch0'),
                array('badge' => '232024', 'time' => '12:53:53', 'bal' => 12, 'cam' => 'ch0'),
                array('badge' => '1FC66A', 'time' => '15:36:09', 'bal' => 12, 'cam' => 'ch0'),
            ),
            'box7' => array(
                array('badge' => '234AB3', 'time' => '17:51:15', 'bal' => 13, 'cam' => 'ch0'),
                array('badge' => '2D4ECB', 'time' => '13:23:14', 'bal' => 14, 'cam' => 'ch0'),
                array('badge' => '2D208B', 'time' => '15:18:27', 'bal' => 13, 'cam' => 'ch0'),
                array('badge' => '2D1F92', 'time' => '14:48:23', 'bal' => 14, 'cam' => 'ch0'),
                array('badge' => '1B808', 'time'  => '12:42:41', 'bal' => 13, 'cam' => 'ch0'),
                array('badge' => '231FBC', 'time' => '14:38:30', 'bal' => 14, 'cam' => 'ch0'),
                array('badge' => '230311', 'time' => '15:00:16', 'bal' => 14, 'cam' => 'ch0'),
                array('badge' => '234A7F', 'time' => '13:03:27', 'bal' => 14, 'cam' => 'ch0'),
            ),
            'box8' => array(
                array('badge' => '2D58DB', 'time' => '12:59:11', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '231FA3', 'time' => '15:39:22', 'bal' => 15, 'cam' => 'ch0'),
                array('badge' => '2D3CBA', 'time' => '16:14:05', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '232029', 'time' => '14:15:17', 'bal' => 15, 'cam' => 'ch0'),
                array('badge' => '233F93', 'time' => '14:46:37', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '1FC6A6', 'time' => '12:16:02', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '23493A', 'time' => '14:38:38', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '234B09', 'time' => '13:03:27', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '5A00CA', 'time' => '16:50:19', 'bal' => 16, 'cam' => 'ch01'),
                array('badge' => '23206A', 'time' => '12:53:39', 'bal' => 16, 'cam' => 'ch01'),
            ),
        );
        $this->tree['2014-11-17'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '12:07:49', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC692', 'time' => '12:21:50', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC69C', 'time' => '12:50:02', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '2D2081', 'time' => '11:59:15', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '1B26D', 'time' => '13:34:56', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '234B49', 'time' => '11:53:35', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '1FC641', 'time' => '12:22:12', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '5A000B', 'time' => '12:31:01', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '233FA1', 'time' => '17:29:21', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '234A3A', 'time' => '12:13:55', 'bal' => 2, 'cam' => 'ch0'),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '11:51:42', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '23068B', 'time' => '11:57:03', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '234963', 'time' => '12:03:13', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '234B19', 'time' => '12:09:13', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '5A00D1', 'time' => '11:52:06', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '234AD8', 'time' => '11:59:01', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '5A00CB', 'time' => '17:04:55', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '5A0051', 'time' => '12:12:21', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '232076', 'time' => '18:10:34', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '23210C', 'time' => '17:49:38', 'bal' => 4, 'cam' => 'ch0'),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '11:52:00', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234BD9', 'time' => '11:57:56', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234B37', 'time' => '12:06:18', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234AEE', 'time' => '12:12:39', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '5A00D6', 'time' => '12:03:32', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '234A70', 'time' => '11:59:56', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '2320C1', 'time' => '14:40:57', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '5A0010', 'time' => '15:19:30', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '233F75', 'time' => '17:56:54', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '1FC68D', 'time' => '11:51:41', 'bal' => 6, 'cam' => 'ch0'),
            ),
            'box4' => array(
                array('badge' => '2D3D1A', 'time' => '11:52:15', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '232111', 'time' => '12:01:38', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00CD', 'time' => '12:05:09', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '234926', 'time' => '11:52:07', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '1FA5AE', 'time' => '13:00:57', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00D2', 'time' => '15:18:24', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00C4', 'time' => '11:59:17', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '1FC650', 'time' => '12:07:08', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00D4', 'time' => '13:45:42', 'bal' => 8, 'cam' => 'ch0'),
            )
        );
        $this->tree['2014-11-18'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '12:11:18', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC692', 'time' => '17:30:29', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '1FC69C', 'time' => '15:06:50', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '2D2081', 'time' => '11:54:38', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '1B26D', 'time' => '15:01:56', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '234B49', 'time' => '12:06:16', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '1FC641', 'time' => '14:34:09', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '5A000B', 'time' => '13:53:02', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '233FA1', 'time' => '15:30:33', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '234A3A', 'time' => '14:57:48', 'bal' => 2, 'cam' => 'ch0'),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '12:51:48', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '23068B', 'time' => '13:19:24', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '234963', 'time' => '13:39:48', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '234B19', 'time' => '13:34:49', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '5A00D1', 'time' => '15:54:38', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '234AD8', 'time' => '13:17:42', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '5A00CB', 'time' => '16:09:03', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '5A0051', 'time' => '15:54:26', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '232076', 'time' => '17:04:23', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '23210C', 'time' => '13:36:18', 'bal' => 4, 'cam' => 'ch0'),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '12:08:48', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '234BD9', 'time' => '16:15:33', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234B37', 'time' => '11:59:27', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234AEE', 'time' => '12:49:47', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '5A00D6', 'time' => '12:03:28', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234A70', 'time' => '12:10:38', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '2320C1', 'time' => '14:56:00', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '5A0010', 'time' => '13:35:37', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '233F75', 'time' => '16:30:43', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '1FC68D', 'time' => '12:00:06', 'bal' => 6, 'cam' => 'ch0'),
            ),
            'box4' => array(
                array('badge' => '232111', 'time' => '12:56:05', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00CD', 'time' => '11:57:33', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '234926', 'time' => '13:36:04', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '1FA5AE', 'time' => '13:54:47', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00D2', 'time' => '14:30:43', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '2D3D1A', 'time' => '12:04:51', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00C4', 'time' => '12:03:50', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '1FC650', 'time' => '13:47:26', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00D4', 'time' => '15:10:14', 'bal' => 8, 'cam' => 'ch0'),
            ),
        );
        $this->tree['2014-11-19'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '12:03:22', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC692', 'time' => '12:20:48', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '1FC69C', 'time' => '14:40:23', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '2D2081', 'time' => '12:03:28', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '1B26D', 'time' => '12:08:53', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '234B49', 'time' => '14:13:15', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC641', 'time' => '17:30:40', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '5A000B', 'time' => '14:52:12', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '233FA1', 'time' => '14:45:49', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '234A3A', 'time' => '16:34:27', 'bal' => 2, 'cam' => 'ch0'),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '12:45:01', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '23068B', 'time' => '13:15:53', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '234963', 'time' => '15:27:57', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '234B19', 'time' => '16:12:01', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '5A00D1', 'time' => '13:24:12', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '234AD8', 'time' => '14:03:49', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '5A00CB', 'time' => '16:32:33', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '5A0051', 'time' => '13:03:54', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '232076', 'time' => '17:22:29', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '23210C', 'time' => '22:15:52', 'bal' => 4, 'cam' => 'ch0'),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '11:56:43', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234BD9', 'time' => '12:49:32', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234B37', 'time' => '13:17:05', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234AEE', 'time' => '14:28:33', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '5A00D6', 'time' => '11:57:12', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '234A70', 'time' => '16:31:19', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '2320C1', 'time' => '14:18:13', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '5A0010', 'time' => '13:38:39', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '233F75', 'time' => '16:24:42', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '1FC68D', 'time' => '12:05:21', 'bal' => 6, 'cam' => 'ch0'),
            ),
            'box4' => array(
                array('badge' => '232111', 'time' => '12:08:38', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00CD', 'time' => '12:30:28', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '234926', 'time' => '14:51:01', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '1FA5AE', 'time' => '12:41:51', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00D2', 'time' => '12:15:01', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '2D3D1A', 'time' => '12:48:30', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00C4', 'time' => '12:24:45', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '1FC650', 'time' => '12:34:21', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00D4', 'time' => '12:09:32', 'bal' => 7, 'cam' => 'ch0'),
            ),
        );
        $this->tree['2014-11-20'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '12:14:31', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC692', 'time' => '19:35:06', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC69C', 'time' => '13:16:30', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '2D2081', 'time' => '12:03:50', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1B26D', 'time' => '12:00:54', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '234B49', 'time' => '17:20:09', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '1FC641', 'time' => '19:36:07', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '5A000B', 'time' => '18:55:08', 'bal' => 1, 'cam' => 'ch0'),
                array('badge' => '233FA1', 'time' => '15:40:49', 'bal' => 2, 'cam' => 'ch0'),
                array('badge' => '234A3A', 'time' => '13:44:17', 'bal' => 2, 'cam' => 'ch0'),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '12:09:09', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '23068B', 'time' => '15:41:05', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '234963', 'time' => '17:09:44', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '234B19', 'time' => '17:30:40', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '5A00D1', 'time' => '11:55:09', 'bal' => 3, 'cam' => 'ch0'),
                array('badge' => '234AD8', 'time' => '17:24:18', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '5A00CB', 'time' => '16:52:02', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '5A0051', 'time' => '15:37:04', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '232076', 'time' => '17:38:43', 'bal' => 4, 'cam' => 'ch0'),
                array('badge' => '23210C', 'time' => '15:48:47', 'bal' => 4, 'cam' => 'ch0'),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '12:05:17', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234BD9', 'time' => '12:11:36', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '234B37', 'time' => '12:10:53', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '234AEE', 'time' => '12:09:58', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '5A00D6', 'time' => '11:56:52', 'bal' => 6, 'cam' => 'ch0'),
                array('badge' => '234A70', 'time' => '12:15:28', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '2320C1', 'time' => '12:31:27', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '5A0010', 'time' => '12:25:25', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '233F75', 'time' => '15:46:07', 'bal' => 5, 'cam' => 'ch0'),
                array('badge' => '1FC68D', 'time' => '11:52:12', 'bal' => 5, 'cam' => 'ch0'),
            ),
            'box4' => array(
                array('badge' => '232111', 'time' => '12:26:27', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00CD', 'time' => '13:00:17', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '234926', 'time' => '14:15:24', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '1FA5AE', 'time' => '13:17:32', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '5A00D2', 'time' => '12:18:29', 'bal' => 8, 'cam' => 'ch0'),
                array('badge' => '2D3D1A', 'time' => '13:23:20', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00C4', 'time' => '12:18:27', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '1FC650', 'time' => '12:14:27', 'bal' => 7, 'cam' => 'ch0'),
                array('badge' => '5A00D4', 'time' => '12:08:19', 'bal' => 7, 'cam' => 'ch0'),
            ),
        );
    }

    public function getForDate($date)
    {
        if (!isset($this->tree[$date])) {
            throw new \Exception("Date introuvable");
        }
        return $this->tree[$date];
    }

    public function getTree()
    {
        return $this->tree;
    }
}
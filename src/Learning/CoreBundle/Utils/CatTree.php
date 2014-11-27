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
                array('badge' => '224ADB', 'time' => '11:42:58', 'bal' => '9'),
                array('badge' => '233F78', 'time' => '11:46:37', 'bal' => '9'),
                array('badge' => '1FA5B3', 'time' => '13:26:03', 'bal' => '9'),
                array('badge' => '2D58D6', 'time' => '12:19:09', 'bal' => '10'),
                array('badge' => '2D58AA', 'time' => '11:52:43', 'bal' => '10'),
                array('badge' => '233F61', 'time' => '11:42:27', 'bal' => '10'),
                array('badge' => '2D66C5', 'time' => '14:43:10', 'bal' => '10'),
                array('badge' => '2D6E16', 'time' => '11:58:28', 'bal' => '10'),
                array('badge' => '232080F', 'time' => '11:44:32', 'bal' => '10'),
                array('badge' => '232080', 'time' => '12:05:10', 'bal' => '10'),
            ),
            'Box6' => array(
                array('badge' => '233F6E', 'time' => '11:54:01', 'bal' => '11'),
                array('badge' => '234B34', 'time' => '11:58:04', 'bal' => '11'),
                array('badge' => '17DA9F', 'time' => '12:12:22', 'bal' => '11'),
                array('badge' => '23211B', 'time' => '11:41:47', 'bal' => '12'),
                array('badge' => '231FA8', 'time' => '12:19:41', 'bal' => '12'),
                array('badge' => '2D2E18', 'time' => '16:08:11', 'bal' => '12'),
                array('badge' => '234937', 'time' => '11:46:35', 'bal' => '12'),
                array('badge' => '23024', 'time' => '11:53:56', 'bal' => '12'),
                array('badge' => '1FC66A', 'time' => '12:07:37', 'bal' => '12'),
            ),
            'Box7' => array(
                array('badge' => '234AB3', 'time' => '11:49:56', 'bal' => '14'),
                array('badge' => '2D4ECB', 'time' => '15:13:26', 'bal' => '13'),
                array('badge' => '2D208B', 'time' => '18:24:55', 'bal' => '13'),
                array('badge' => '2D1F92', 'time' => '14:49:55', 'bal' => '14'),
                array('badge' => '1B808', 'time' => '12:23:47', 'bal' => '13'),
                array('badge' => '231FBC', 'time' => '16:22:59', 'bal' => '14'),
                array('badge' => '230311', 'time' => '11:45:29', 'bal' => '14'),
                array('badge' => '234A7F', 'time' => '11:57:40', 'bal' => '14'),
            ),
            'Box8' => array(
                array('badge' => '2D58DB', 'time' => '11:42:38', 'bal' => '15'),
                array('badge' => '231FA3', 'time' => '11:47:51', 'bal' => '15'),
                array('badge' => '2D3CBA', 'time' => '11:51:28', 'bal' => '15'),
                array('badge' => '232029', 'time' => '11:58:26', 'bal' => '15'),
                array('badge' => '233F93', 'time' => '12:30:40', 'bal' => '15'),
                array('badge' => '1FC6A6', 'time' => '14:54:13', 'bal' => '15'),
                array('badge' => '23493A', 'time' => '12:02:41', 'bal' => '16'),
                array('badge' => '234B09', 'time' => '17:38:07', 'bal' => '15'),
                array('badge' => '5A00CA', 'time' => '11:44:50', 'bal' => '16'),
                array('badge' => '23206A', 'time' => '13:58:28', 'bal' => '16'),
            )
        );
        $this->tree['2014-11-04'] = array(
            'box5' => array(
                array('badge' => '234ADB', 'time' => '13:05:01', 'bal' => '9'),
                array('badge' => '233F78', 'time' => '11:42:09', 'bal' => '10'),
                array('badge' => '1FA5B3', 'time' => '12:29:35', 'bal' => '9'),
                array('badge' => '2D58D6', 'time' => '14:22:08', 'bal' => '10'),
                array('badge' => '2D58AA', 'time' => '14:03:26', 'bal' => '9'),
                array('badge' => '233F61', 'time' => '12:00:41', 'bal' => '9'),
                array('badge' => '2D66C5', 'time' => '12:18:49', 'bal' => '10'),
                array('badge' => '2D6E16', 'time' => '14:04:08', 'bal' => '10'),
                array('badge' => '23208F', 'time' => '12:09:51', 'bal' => '10'),
                array('badge' => '232080', 'time' => '14:28:34', 'bal' => '10'),
            ),
            'box6' => array(
                array('badge' => '233F6E', 'time' => '14:07:35', 'bal' => '11'),
                array('badge' => '234B34', 'time' => '12:56:49', 'bal' => '12'),
                array('badge' => '17DA9F', 'time' => '15:53:14', 'bal' => '11'),
                array('badge' => '23211B', 'time' => '11:52:46', 'bal' => '12'),
                array('badge' => '231FA8', 'time' => '12:13:11', 'bal' => '11'),
                array('badge' => '2D2E18', 'time' => '14:15:47', 'bal' => '12'),
                array('badge' => '234937', 'time' => '11:55:54', 'bal' => '12'),
                array('badge' => '232024', 'time' => '12:02:27', 'bal' => '12'),
                array('badge' => '1FC66A', 'time' => '11:37:35', 'bal' => '12')
            ),
            'box7' => array(
                array('badget' => '234AB3', 'time' => '11:32:48', 'bal' => '13'),
                array('badget' => '2D4ECB', 'time' => '13:54:45', 'bal' => '14'),
                array('badget' => '2D208B', 'time' => '15:57:22', 'bal' => '14'),
                array('badget' => '2D1F92', 'time' => '11:46:41', 'bal' => '13'),
                array('badget' => '1B808', 'time' => '14:22:53', 'bal' => '13'),
                array('badget' => '231FBC', 'time' => '14:39:33', 'bal' => '14'),
                array('badget' => '230311', 'time' => '14:08:43', 'bal' => '13'),
                array('badget' => '234A7F', 'time' => '11:35:36', 'bal' => '13'),
            ),
            'box8' => array(
                array('badge' => '2D58DB', 'time' => '13:32:49', 'bal' => '16'),
                array('badge' => '231FA3', 'time' => '13:30:46', 'bal' => '16'),
                array('badge' => '2D3CBA', 'time' => '13:23:15', 'bal' => '16'),
                array('badge' => '232029', 'time' => '13:14:20', 'bal' => '15'),
                array('badge' => '233F93', 'time' => '13:29:41', 'bal' => '15'),
                array('badge' => '1FC6A6', 'time' => '11:47:29', 'bal' => '16'),
                array('badge' => '23493A', 'time' => '12:52:03', 'bal' => '15'),
                array('badge' => '234B09', 'time' => '15:06:23', 'bal' => '16'),
                array('badge' => '5A00CA', 'time' => '12:33:42', 'bal' => '15'),
                array('badge' => '23206A', 'time' => '15:46:24', 'bal' => '16'),
            )
        );
        $this->tree['2014-11-05'] = array(
            'box5' => array(
                array('badge' => '234ADB', 'time' => '11:42:18', 'bal' => 10),
                array('badge' => '233F78', 'time' => '13:48:25', 'bal' => 10),
                array('badge' => '1FA5B3', 'time' => '11:48:59', 'bal' => 10),
                array('badge' => '2D58D6', 'time' => '14:01:02', 'bal' => 10),
                array('badge' => '2D58AA', 'time' => '15:34:28', 'bal' => 10),
                array('badge' => '233F61', 'time' => '11:33:26', 'bal' =>  9),
                array('badge' => '2D66C5', 'time' => '11:33:30', 'bal' => 10),
                array('badge' => '2D6E16', 'time' => '14:55:45', 'bal' => 10),
                array('badge' => '23208F', 'time' => '11:39:41', 'bal' => 10),
                array('badge' => '232080', 'time' => '15:02:04', 'bal' => 10),
            ),
            'box6' => array(
                array('badge' => '233F6E', 'time' => '11:34:15', 'bal' => 11),
                array('badge' => '234B34', 'time' => '11:45:44', 'bal' => 12),
                array('badge' => '17DA9F', 'time' => '12:36:16', 'bal' => 11),
                array('badge' => '23211B', 'time' => '11:34:18', 'bal' => 12),
                array('badge' => '231FA8', 'time' => '14:32:28', 'bal' => 11),
                array('badge' => '2D2E18', 'time' => '11:55:32', 'bal' => 12),
                array('badge' => '234937', 'time' => '11:36:29', 'bal' => 12),
                array('badge' => '232024', 'time' => '12:59:22', 'bal' => 12),
                array('badge' => '1FC66A', 'time' => '12:45:14', 'bal' => 11),
            ),
            'box7' => array(
                array('badge' => '234AB3', 'time' => '11:35:51', 'bal' => 14),
                array('badge' => '2D4ECB', 'time' => '15:57:21', 'bal' => 14),
                array('badge' => '2D208B', 'time' => '14:21:43', 'bal' => 14),
                array('badge' => '2D1F92', 'time' => '17:02:40', 'bal' => 14),
                array('badge' => '1B808', 'time' => '11:36:32', 'bal' => 13),
                array('badge' => '231FBC', 'time' => '13:00:08', 'bal' => 14),
                array('badge' => '230311', 'time' => '14:09:07', 'bal' => 14),
                array('badge' => '234A7F', 'time' => '12:11:48', 'bal' => 14),
            ),
            'box8' => array(
                array('badge' => '2D58DB', 'time' => '11:32:47', 'bal' => 16),
                array('badge' => '231FA3', 'time' => '11:32:50', 'bal' => 15),
                array('badge' => '2D3CBA', 'time' => '11:48:11', 'bal' => 16),
                array('badge' => '232029', 'time' => '11:41:22', 'bal' => 15),
                array('badge' => '233F93', 'time' => '14:51:32', 'bal' => 16),
                array('badge' => '1FC6A6', 'time' => '11:52:57', 'bal' => 15),
                array('badge' => '23493A', 'time' => '11:39:10', 'bal' => 15),
                array('badge' => '234B09', 'time' => '14:59:58', 'bal' => 16),
                array('badge' => '5A00CA', 'time' => '14:46:14', 'bal' => 16),
                array('badge' => '23206A', 'time' => '12:00:03', 'bal' => 16),
            ),
        );
        $this->tree['2014-11-06'] = array(
            'box5' => array(
                array('badge' => '234ADB', 'time' => '11:38:52', 'bal' => 10),
                array('badge' => '233F78', 'time' => '12:46:17', 'bal' => 9),
                array('badge' => '1FA5B3', 'time' => '21:46:20', 'bal' => 10),
                array('badge' => '2D58D6', 'time' => '17:27:45', 'bal' => 10),
                array('badge' => '2D58AA', 'time' => '14:26:23', 'bal' => 9),
                array('badge' => '233F61', 'time' => '11:40:36', 'bal' => 9),
                array('badge' => '2D66C5', 'time' => '12:14:15', 'bal' => 9),
                array('badge' => '2D6E16', 'time' => '14:36:15', 'bal' => 9),
                array('badge' => '23208F', 'time' => '15:56:30', 'bal' => 10),
                array('badge' => '232080', 'time' => '11:43:57', 'bal' => 9),
            ),
            'box6' => array(
                array('badge' => '233F6E', 'time' => '11:32:11', 'bal' => 11),
                array('badge' => '234B34', 'time' => '11:36:42', 'bal' => 12),
                array('badge' => '17DA9F', 'time' => '11:54:29', 'bal' => 11),
                array('badge' => '23211B', 'time' => '12:13:45', 'bal' => 11),
                array('badge' => '231FA8', 'time' => '11:31:59', 'bal' => 12),
                array('badge' => '2D2E18', 'time' => '11:39:43', 'bal' => 11),
                array('badge' => '234937', 'time' => '11:44:12', 'bal' => 11),
                array('badge' => '232024', 'time' => '11:42:53', 'bal' => 12),
                array('badge' => '1FC66A', 'time' => '14:25:09', 'bal' => 12),
            ),
            'box7' => array(
                array('badge' => '234AB3', 'time' => '16:40:15', 'bal' => 13),
                array('badge' => '2D4ECB', 'time' => '12:12:14', 'bal' => 14),
                array('badge' => '2D208B', 'time' => '14:07:27', 'bal' => 13),
                array('badge' => '2D1F92', 'time' => '13:37:23', 'bal' => 14),
                array('badge' => '1B808', 'time' => '11:31:41', 'bal' => 13),
                array('badge' => '231FBC', 'time' => '13:27:30', 'bal' => 14),
                array('badge' => '230311', 'time' => '13:49:16', 'bal' => 14),
                array('badge' => '234A7F', 'time' => '11:52:27', 'bal' => 14),
            ),
            'box8' => array(
                array('badge' => '2D58DB', 'time' => '12:54:11', 'bal' => 16),
                array('badge' => '231FA3', 'time' => '15:17:00', 'bal' => 15),
                array('badge' => '2D3CBA', 'time' => '16:09:05', 'bal' => 16),
                array('badge' => '232029', 'time' => '13:02:14', 'bal' => 15),
                array('badge' => '233F93', 'time' => '14:41:37', 'bal' => 16),
                array('badge' => '1FC6A6', 'time' => '12:11:02', 'bal' => 16),
                array('badge' => '23493A', 'time' => '14:33:38', 'bal' => 16),
                array('badge' => '234B09', 'time' => '12:58:27', 'bal' => 16),
                array('badge' => '5A00CA', 'time' => '14:31:31', 'bal' => 16),
                array('badge' => '23206A', 'time' => '12:48:39', 'bal' => 16),
            ),
        );
        $this->tree['2014-11-17'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '12:02:49', 'bal' => 1),
                array('badge' => '1FC692', 'time' => '12:16:50', 'bal' => 1),
                array('badge' => '1FC69C', 'time' => '12:45:02', 'bal' => 1),
                array('badge' => '2D2081', 'time' => '11:54:15', 'bal' => 2),
                array('badge' => '1B26D', 'time' => '13:29:56', 'bal' => 1),
                array('badge' => '234B49', 'time' => '11:48:35', 'bal' => 2),
                array('badge' => '1FC641', 'time' => '12:17:12', 'bal' => 2),
                array('badge' => '5A000B', 'time' => '12:26:01', 'bal' => 2),
                array('badge' => '233FA1', 'time' => '17:24:21', 'bal' => 1),
                array('badge' => '234A3A', 'time' => '12:08:55', 'bal' => 2),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '11:46:42', 'bal' => 3),
                array('badge' => '23068B', 'time' => '11:52:03', 'bal' => 3),
                array('badge' => '234963', 'time' => '11:58:13', 'bal' => 3),
                array('badge' => '234B19', 'time' => '12:04:13', 'bal' => 3),
                array('badge' => '5A00D1', 'time' => '11:47:06', 'bal' => 4),
                array('badge' => '234AD8', 'time' => '11:54:01', 'bal' => 4),
                array('badge' => '5A00CB', 'time' => '16:59:55', 'bal' => 3),
                array('badge' => '5A0051', 'time' => '12:07:21', 'bal' => 4),
                array('badge' => '232076', 'time' => '18:05:34', 'bal' => 3),
                array('badge' => '23210C', 'time' => '17:42:38', 'bal' => 4),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '11:47:00', 'bal' => 5),
                array('badge' => '234BD9', 'time' => '11:52:56', 'bal' => 5),
                array('badge' => '234B37', 'time' => '12:01:18', 'bal' => 5),
                array('badge' => '234AEE', 'time' => '12:07:39', 'bal' => 5),
                array('badge' => '5A00D6', 'time' => '11:58:32', 'bal' => 6),
                array('badge' => '234A70', 'time' => '11:52:56', 'bal' => 5),
                array('badge' => '2320C1', 'time' => '14:35:57', 'bal' => 5),
                array('badge' => '5A0010', 'time' => '15:14:30', 'bal' => 5),
                array('badge' => '233F75', 'time' => '17:51:54', 'bal' => 5),
                array('badge' => '1FC68D', 'time' => '11:46:41', 'bal' => 6),
            ),
            'box4' => array(
                array('badge' => '2D3D1A', 'time' => '11:47:15', 'bal' => 7),
                array('badge' => '232111', 'time' => '11:56:38', 'bal' => 7),
                array('badge' => '5A00CD', 'time' => '12:00:09', 'bal' => 7),
                array('badge' => '234926', 'time' => '11:47:07', 'bal' => 8),
                array('badge' => '1FA5AE', 'time' => '12:55:57', 'bal' => 7),
                array('badge' => '5A00D2', 'time' => '15:13:24', 'bal' => 8),
                array('badge' => '5A00C4', 'time' => '11:54:17', 'bal' => 8),
                array('badge' => '1FC650', 'time' => '12:02:08', 'bal' => 8),
                array('badge' => '5A00D4', 'time' => '13:40:42', 'bal' => 8),
            )
        );
        $this->tree['2014-11-18'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '12:06:18', 'bal' => 1),
                array('badge' => '1FC692', 'time' => '17:25:29', 'bal' => 2),
                array('badge' => '1FC69C', 'time' => '15:01:50', 'bal' => 2),
                array('badge' => '2D2081', 'time' => '11:49:38', 'bal' => 2),
                array('badge' => '1B26D', 'time' => '14:56:56', 'bal' => 1),
                array('badge' => '234B49', 'time' => '12:01:16', 'bal' => 2),
                array('badge' => '1FC641', 'time' => '14:29:09', 'bal' => 2),
                array('badge' => '5A000B', 'time' => '13:48:02', 'bal' => 2),
                array('badge' => '233FA1', 'time' => '15:25:33', 'bal' => 1),
                array('badge' => '234A3A', 'time' => '14:52:48', 'bal' => 2),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '12:46:48', 'bal' => 4),
                array('badge' => '23068B', 'time' => '13:14:24', 'bal' => 4),
                array('badge' => '234963', 'time' => '13:34:48', 'bal' => 4),
                array('badge' => '234B19', 'time' => '13:29:49', 'bal' => 3),
                array('badge' => '5A00D1', 'time' => '15:49:38', 'bal' => 3),
                array('badge' => '234AD8', 'time' => '13:12:42', 'bal' => 3),
                array('badge' => '5A00CB', 'time' => '16:04:03', 'bal' => 4),
                array('badge' => '5A0051', 'time' => '15:49:26', 'bal' => 4),
                array('badge' => '232076', 'time' => '16:59:23', 'bal' => 4),
                array('badge' => '23210C', 'time' => '13:31:18', 'bal' => 4),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '12:03:48', 'bal' => 6),
                array('badge' => '234BD9', 'time' => '16:10:33', 'bal' => 5),
                array('badge' => '234B37', 'time' => '11:54:27', 'bal' => 5),
                array('badge' => '234AEE', 'time' => '12:44:47', 'bal' => 5),
                array('badge' => '5A00D6', 'time' => '11:58:28', 'bal' => 5),
                array('badge' => '234A70', 'time' => '12:05:38', 'bal' => 5),
                array('badge' => '2320C1', 'time' => '14:51:00', 'bal' => 5),
                array('badge' => '5A0010', 'time' => '13:30:37', 'bal' => 5),
                array('badge' => '233F75', 'time' => '16:25:43', 'bal' => 6),
                array('badge' => '1FC68D', 'time' => '11:55:06', 'bal' => 6),
            ),
            'box4' => array(
                array('badge' => '232111', 'time' => '12:51:05', 'bal' => 7),
                array('badge' => '5A00CD', 'time' => '11:52:33', 'bal' => 8),
                array('badge' => '234926', 'time' => '13:31:04', 'bal' => 7),
                array('badge' => '1FA5AE', 'time' => '13:49:47', 'bal' => 7),
                array('badge' => '5A00D2', 'time' => '14:25:43', 'bal' => 8),
                array('badge' => '2D3D1A', 'time' => '11:59:51', 'bal' => 8),
                array('badge' => '5A00C4', 'time' => '11:58:50', 'bal' => 7),
                array('badge' => '1FC650', 'time' => '13:42:26', 'bal' => 8),
                array('badge' => '5A00D4', 'time' => '15:05:14', 'bal' => 8),
            ),
        );
        $this->tree['2014-11-19'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '11:58:22', 'bal' => 1),
                array('badge' => '1FC692', 'time' => '12:15:48', 'bal' => 2),
                array('badge' => '1FC69C', 'time' => '14:35:23', 'bal' => 2),
                array('badge' => '2D2081', 'time' => '11:58:28', 'bal' => 2),
                array('badge' => '1B26D', 'time' => '12:03:53', 'bal' => 2),
                array('badge' => '234B49', 'time' => '14:08:15', 'bal' => 1),
                array('badge' => '1FC641', 'time' => '12:24:24', 'bal' => 1),
                array('badge' => '5A000B', 'time' => '14:47:12', 'bal' => 1),
                array('badge' => '233FA1', 'time' => '14:40:49', 'bal' => 2),
                array('badge' => '234A3A', 'time' => '16:29:27', 'bal' => 2),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '12:35:01', 'bal' => 3),
                array('badge' => '23068B', 'time' => '13:05:53', 'bal' => 4),
                array('badge' => '234963', 'time' => '14:18:43', 'bal' => 4),
                array('badge' => '234B19', 'time' => '16:02:01', 'bal' => 4),
                array('badge' => '5A00D1', 'time' => '13:14:12', 'bal' => 3),
                array('badge' => '234AD8', 'time' => '13:53:49', 'bal' => 4),
                array('badge' => '5A00CB', 'time' => '16:22:33', 'bal' => 4),
                array('badge' => '5A0051', 'time' => '12:53:54', 'bal' => 4),
                array('badge' => '232076', 'time' => '17:12:29', 'bal' => 4),
                array('badge' => '23210C', 'time' => '22:05:52', 'bal' => 4),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '11:46:43', 'bal' => 5),
                array('badge' => '234BD9', 'time' => '12:39:32', 'bal' => 5),
                array('badge' => '234B37', 'time' => '13:07:05', 'bal' => 5),
                array('badge' => '234AEE', 'time' => '14:18:33', 'bal' => 5),
                array('badge' => '5A00D6', 'time' => '11:47:12', 'bal' => 6),
                array('badge' => '234A70', 'time' => '16:21:19', 'bal' => 6),
                array('badge' => '2320C1', 'time' => '14:08:13', 'bal' => 5),
                array('badge' => '5A0010', 'time' => '13:28:39', 'bal' => 5),
                array('badge' => '233F75', 'time' => '16:14:42', 'bal' => 5),
                array('badge' => '1FC68D', 'time' => '11:55:21', 'bal' => 6),
            ),
            'box4' => array(
                array('badge' => '232111', 'time' => '11:58:38', 'bal' => 8),
                array('badge' => '5A00CD', 'time' => '12:20:28', 'bal' => 7),
                array('badge' => '234926', 'time' => '14:41:01', 'bal' => 7),
                array('badge' => '1FA5AE', 'time' => '12:31:51', 'bal' => 7),
                array('badge' => '5A00D2', 'time' => '12:05:01', 'bal' => 8),
                array('badge' => '2D3D1A', 'time' => '12:38:30', 'bal' => 8),
                array('badge' => '5A00C4', 'time' => '12:14:45', 'bal' => 7),
                array('badge' => '1FC650', 'time' => '12:24:21', 'bal' => 8),
                array('badge' => '5A00D4', 'time' => '12:09:32', 'bal' => 7),
            ),
        );
        $this->tree['2014-11-20'] = array(
            'box1' => array(
                array('badge' => '5A0031', 'time' => '12:09:31', 'bal' => 1),
                array('badge' => '1FC692', 'time' => '17:15:22', 'bal' => 1),
                array('badge' => '1FC69C', 'time' => '13:11:30', 'bal' => 2),
                array('badge' => '2D2081', 'time' => '11:58:50', 'bal' => 1),
                array('badge' => '1B26D',  'time' => '11:55:54', 'bal' => 1),
                array('badge' => '234B49', 'time' => '13:29:59', 'bal' => 1),
                array('badge' => '1FC641', 'time' => '19:31:07', 'bal' => 1),
                array('badge' => '5A000B', 'time' => '18:50:08', 'bal' => 1),
                array('badge' => '233FA1', 'time' => '15:35:49', 'bal' => 2),
                array('badge' => '234A3A', 'time' => '13:39:17', 'bal' => 2),
            ),
            'box2' => array(
                array('badge' => '2320DE', 'time' => '12:04:09', 'bal' => 3),
                array('badge' => '23068B', 'time' => '15:36:05', 'bal' => 3),
                array('badge' => '234963', 'time' => '11:49:12', 'bal' => 3),
                array('badge' => '234B19', 'time' => '17:25:40', 'bal' => 3),
                array('badge' => '5A00D1', 'time' => '11:55:09', 'bal' => 3),
                array('badge' => '234AD8', 'time' => '11:59:51', 'bal' => 4),
                array('badge' => '5A00CB', 'time' => '16:47:02', 'bal' => 4),
                array('badge' => '5A0051', 'time' => '15:32:04', 'bal' => 4),
                array('badge' => '232076', 'time' => '17:33:43', 'bal' => 4),
                array('badge' => '23210C', 'time' => '15:43:47', 'bal' => 4),
            ),
            'box3' => array(
                array('badge' => '234B13', 'time' => '12:00:17', 'bal' => 5),
                array('badge' => '234BD9', 'time' => '12:06:36', 'bal' => 6),
                array('badge' => '234B37', 'time' => '12:05:53', 'bal' => 5),
                array('badge' => '234AEE', 'time' => '12:02:58', 'bal' => 6),
                array('badge' => '5A00D6', 'time' => '11:51:52', 'bal' => 6),
                array('badge' => '234A70', 'time' => '12:10:28', 'bal' => 5),
                array('badge' => '2320C1', 'time' => '12:26:27', 'bal' => 5),
                array('badge' => '5A0010', 'time' => '12:20:25', 'bal' => 5),
                array('badge' => '233F75', 'time' => '15:41:07', 'bal' => 5),
                array('badge' => '1FC68D', 'time' => '11:47:12', 'bal' => 5),
            ),
            'box4' => array(
                array('badge' => '232111', 'time' => '12:21:27', 'bal' => 7),
                array('badge' => '5A00CD', 'time' => '12:01:01', 'bal' => 8),
                array('badge' => '234926', 'time' => '14:10:24', 'bal' => 7),
                array('badge' => '1FA5AE', 'time' => '13:12:32', 'bal' => 8),
                array('badge' => '5A00D2', 'time' => '12:13:29', 'bal' => 8),
                array('badge' => '2D3D1A', 'time' => '13:18:20', 'bal' => 7),
                array('badge' => '5A00C4', 'time' => '12:13:27', 'bal' => 7),
                array('badge' => '1FC650', 'time' => '12:09:27', 'bal' => 7),
                array('badge' => '5A00D4', 'time' => '12:03:19', 'bal' => 7),
            ),
        );
    }

    public function getTimesForEntry($bal, $date, $hour/*, $camera*/)
    {
        if (!empty($this->tree[$date])) {
            $times = array();

            foreach ($this->tree[$date] as $box => $items) {
                foreach ($items as $item) {
                    if ($item['bal'] == $bal) {
                        $times[] = $item['time'];
                    }
                }
            }
            sort($times);
            return $times;
        }
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
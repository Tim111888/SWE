<?php exit; ?>
1512262922
SELECT agr.*, agt.autogroups_type_name FROM (phpbb_autogroups_rules agr CROSS JOIN phpbb_autogroups_types agt) WHERE agr.autogroups_type_id = agt.autogroups_type_id
324
a:1:{i:0;a:8:{s:13:"autogroups_id";s:1:"1";s:18:"autogroups_type_id";s:1:"3";s:20:"autogroups_min_value";s:1:"0";s:20:"autogroups_max_value";s:9:"999999999";s:19:"autogroups_group_id";s:1:"9";s:18:"autogroups_default";s:1:"1";s:17:"autogroups_notify";s:1:"0";s:20:"autogroups_type_name";s:27:"phpbb.autogroups.type.posts";}}
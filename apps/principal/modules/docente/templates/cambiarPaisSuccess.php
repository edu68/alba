<?php
    use_helper("Object");
?>
<div id="item_provincia">
<?php 
    echo select_tag('docente[fk_provincia_id]', objects_for_select($provincias, 'getId','getNombreLargo'), array('control_name' => 'docente[fk_provincia_id]'));
?>
</div>
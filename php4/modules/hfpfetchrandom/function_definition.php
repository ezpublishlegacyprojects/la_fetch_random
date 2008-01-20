<?php
/**
 * @author      LIU Bin <bin.liu@lagardere-active.com>
 */

$FunctionList = array();
$baseDir = eZExtension::baseDirectory()."/hfpfetchrandom/modules/hfpfetchrandom/";


$FunctionList['list'] = array( 'name' => 'tree',
                               'operation_types' => array( 'read' ),
								'call_method' => array( 'include_file' => $baseDir . 'fetchrandomfunctioncollection.php',
														'class' => 'hfpRamdomFunctionCollection',
                                                       'method' => 'fetchObjectTreeRamdom' ),
                               'parameter_type' => 'standard',
                               'parameters' => array( array( 'name' => 'parent_node_id',
                                                             'type' => 'integer',
                                                             'required' => true ),
                                                      array( 'name' => 'only_translated',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'language',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'offset',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'limit',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'depth',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => 1 ),
                                                      array( 'name' => 'depth_operator',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => 'le' ),
                                                      array( 'name' => 'class_id',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'attribute_filter',
                                                             'type' => 'mixed',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'extended_attribute_filter',
                                                             'type' => 'mixed',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'class_filter_type',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'class_filter_array',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'group_by',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'main_node_only',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'ignore_visibility',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'limitation',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'as_object',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'objectname_filter',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'load_data_map',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => true ) ) );

?>
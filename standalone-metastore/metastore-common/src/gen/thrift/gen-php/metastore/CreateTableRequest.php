<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class CreateTableRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'table',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\metastore\Table',
        ),
        2 => array(
            'var' => 'envContext',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\metastore\EnvironmentContext',
        ),
        3 => array(
            'var' => 'primaryKeys',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLPrimaryKey',
                ),
        ),
        4 => array(
            'var' => 'foreignKeys',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLForeignKey',
                ),
        ),
        5 => array(
            'var' => 'uniqueConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLUniqueConstraint',
                ),
        ),
        6 => array(
            'var' => 'notNullConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLNotNullConstraint',
                ),
        ),
        7 => array(
            'var' => 'defaultConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLDefaultConstraint',
                ),
        ),
        8 => array(
            'var' => 'checkConstraints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLCheckConstraint',
                ),
        ),
        9 => array(
            'var' => 'processorCapabilities',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        10 => array(
            'var' => 'processorIdentifier',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var \metastore\Table
     */
    public $table = null;
    /**
     * @var \metastore\EnvironmentContext
     */
    public $envContext = null;
    /**
     * @var \metastore\SQLPrimaryKey[]
     */
    public $primaryKeys = null;
    /**
     * @var \metastore\SQLForeignKey[]
     */
    public $foreignKeys = null;
    /**
     * @var \metastore\SQLUniqueConstraint[]
     */
    public $uniqueConstraints = null;
    /**
     * @var \metastore\SQLNotNullConstraint[]
     */
    public $notNullConstraints = null;
    /**
     * @var \metastore\SQLDefaultConstraint[]
     */
    public $defaultConstraints = null;
    /**
     * @var \metastore\SQLCheckConstraint[]
     */
    public $checkConstraints = null;
    /**
     * @var string[]
     */
    public $processorCapabilities = null;
    /**
     * @var string
     */
    public $processorIdentifier = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['table'])) {
                $this->table = $vals['table'];
            }
            if (isset($vals['envContext'])) {
                $this->envContext = $vals['envContext'];
            }
            if (isset($vals['primaryKeys'])) {
                $this->primaryKeys = $vals['primaryKeys'];
            }
            if (isset($vals['foreignKeys'])) {
                $this->foreignKeys = $vals['foreignKeys'];
            }
            if (isset($vals['uniqueConstraints'])) {
                $this->uniqueConstraints = $vals['uniqueConstraints'];
            }
            if (isset($vals['notNullConstraints'])) {
                $this->notNullConstraints = $vals['notNullConstraints'];
            }
            if (isset($vals['defaultConstraints'])) {
                $this->defaultConstraints = $vals['defaultConstraints'];
            }
            if (isset($vals['checkConstraints'])) {
                $this->checkConstraints = $vals['checkConstraints'];
            }
            if (isset($vals['processorCapabilities'])) {
                $this->processorCapabilities = $vals['processorCapabilities'];
            }
            if (isset($vals['processorIdentifier'])) {
                $this->processorIdentifier = $vals['processorIdentifier'];
            }
        }
    }

    public function getName()
    {
        return 'CreateTableRequest';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->table = new \metastore\Table();
                        $xfer += $this->table->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->envContext = new \metastore\EnvironmentContext();
                        $xfer += $this->envContext->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->primaryKeys = array();
                        $_size1054 = 0;
                        $_etype1057 = 0;
                        $xfer += $input->readListBegin($_etype1057, $_size1054);
                        for ($_i1058 = 0; $_i1058 < $_size1054; ++$_i1058) {
                            $elem1059 = null;
                            $elem1059 = new \metastore\SQLPrimaryKey();
                            $xfer += $elem1059->read($input);
                            $this->primaryKeys []= $elem1059;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->foreignKeys = array();
                        $_size1060 = 0;
                        $_etype1063 = 0;
                        $xfer += $input->readListBegin($_etype1063, $_size1060);
                        for ($_i1064 = 0; $_i1064 < $_size1060; ++$_i1064) {
                            $elem1065 = null;
                            $elem1065 = new \metastore\SQLForeignKey();
                            $xfer += $elem1065->read($input);
                            $this->foreignKeys []= $elem1065;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->uniqueConstraints = array();
                        $_size1066 = 0;
                        $_etype1069 = 0;
                        $xfer += $input->readListBegin($_etype1069, $_size1066);
                        for ($_i1070 = 0; $_i1070 < $_size1066; ++$_i1070) {
                            $elem1071 = null;
                            $elem1071 = new \metastore\SQLUniqueConstraint();
                            $xfer += $elem1071->read($input);
                            $this->uniqueConstraints []= $elem1071;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->notNullConstraints = array();
                        $_size1072 = 0;
                        $_etype1075 = 0;
                        $xfer += $input->readListBegin($_etype1075, $_size1072);
                        for ($_i1076 = 0; $_i1076 < $_size1072; ++$_i1076) {
                            $elem1077 = null;
                            $elem1077 = new \metastore\SQLNotNullConstraint();
                            $xfer += $elem1077->read($input);
                            $this->notNullConstraints []= $elem1077;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::LST) {
                        $this->defaultConstraints = array();
                        $_size1078 = 0;
                        $_etype1081 = 0;
                        $xfer += $input->readListBegin($_etype1081, $_size1078);
                        for ($_i1082 = 0; $_i1082 < $_size1078; ++$_i1082) {
                            $elem1083 = null;
                            $elem1083 = new \metastore\SQLDefaultConstraint();
                            $xfer += $elem1083->read($input);
                            $this->defaultConstraints []= $elem1083;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::LST) {
                        $this->checkConstraints = array();
                        $_size1084 = 0;
                        $_etype1087 = 0;
                        $xfer += $input->readListBegin($_etype1087, $_size1084);
                        for ($_i1088 = 0; $_i1088 < $_size1084; ++$_i1088) {
                            $elem1089 = null;
                            $elem1089 = new \metastore\SQLCheckConstraint();
                            $xfer += $elem1089->read($input);
                            $this->checkConstraints []= $elem1089;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::LST) {
                        $this->processorCapabilities = array();
                        $_size1090 = 0;
                        $_etype1093 = 0;
                        $xfer += $input->readListBegin($_etype1093, $_size1090);
                        for ($_i1094 = 0; $_i1094 < $_size1090; ++$_i1094) {
                            $elem1095 = null;
                            $xfer += $input->readString($elem1095);
                            $this->processorCapabilities []= $elem1095;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->processorIdentifier);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('CreateTableRequest');
        if ($this->table !== null) {
            if (!is_object($this->table)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('table', TType::STRUCT, 1);
            $xfer += $this->table->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->envContext !== null) {
            if (!is_object($this->envContext)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('envContext', TType::STRUCT, 2);
            $xfer += $this->envContext->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->primaryKeys !== null) {
            if (!is_array($this->primaryKeys)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('primaryKeys', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->primaryKeys));
            foreach ($this->primaryKeys as $iter1096) {
                $xfer += $iter1096->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->foreignKeys !== null) {
            if (!is_array($this->foreignKeys)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('foreignKeys', TType::LST, 4);
            $output->writeListBegin(TType::STRUCT, count($this->foreignKeys));
            foreach ($this->foreignKeys as $iter1097) {
                $xfer += $iter1097->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->uniqueConstraints !== null) {
            if (!is_array($this->uniqueConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('uniqueConstraints', TType::LST, 5);
            $output->writeListBegin(TType::STRUCT, count($this->uniqueConstraints));
            foreach ($this->uniqueConstraints as $iter1098) {
                $xfer += $iter1098->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->notNullConstraints !== null) {
            if (!is_array($this->notNullConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('notNullConstraints', TType::LST, 6);
            $output->writeListBegin(TType::STRUCT, count($this->notNullConstraints));
            foreach ($this->notNullConstraints as $iter1099) {
                $xfer += $iter1099->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->defaultConstraints !== null) {
            if (!is_array($this->defaultConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('defaultConstraints', TType::LST, 7);
            $output->writeListBegin(TType::STRUCT, count($this->defaultConstraints));
            foreach ($this->defaultConstraints as $iter1100) {
                $xfer += $iter1100->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->checkConstraints !== null) {
            if (!is_array($this->checkConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('checkConstraints', TType::LST, 8);
            $output->writeListBegin(TType::STRUCT, count($this->checkConstraints));
            foreach ($this->checkConstraints as $iter1101) {
                $xfer += $iter1101->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->processorCapabilities !== null) {
            if (!is_array($this->processorCapabilities)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('processorCapabilities', TType::LST, 9);
            $output->writeListBegin(TType::STRING, count($this->processorCapabilities));
            foreach ($this->processorCapabilities as $iter1102) {
                $xfer += $output->writeString($iter1102);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->processorIdentifier !== null) {
            $xfer += $output->writeFieldBegin('processorIdentifier', TType::STRING, 10);
            $xfer += $output->writeString($this->processorIdentifier);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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

class ChronosNode_deleteJobTestRun_result
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'na',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\FeatureNotAvailable',
        ),
    );

    /**
     * @var \chronos\FeatureNotAvailable
     */
    public $na = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['na'])) {
                $this->na = $vals['na'];
            }
        }
    }

    public function getName()
    {
        return 'ChronosNode_deleteJobTestRun_result';
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
                        $this->na = new \chronos\FeatureNotAvailable();
                        $xfer += $this->na->read($input);
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
        $xfer += $output->writeStructBegin('ChronosNode_deleteJobTestRun_result');
        if ($this->na !== null) {
            $xfer += $output->writeFieldBegin('na', TType::STRUCT, 1);
            $xfer += $this->na->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
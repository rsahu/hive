/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
package org.apache.hadoop.hive.metastore.api;

@SuppressWarnings({"cast", "rawtypes", "serial", "unchecked", "unused"})
@javax.annotation.Generated(value = "Autogenerated by Thrift Compiler (0.14.1)")
@org.apache.hadoop.classification.InterfaceAudience.Public @org.apache.hadoop.classification.InterfaceStability.Stable public class WMGetTriggersForResourePlanResponse implements org.apache.thrift.TBase<WMGetTriggersForResourePlanResponse, WMGetTriggersForResourePlanResponse._Fields>, java.io.Serializable, Cloneable, Comparable<WMGetTriggersForResourePlanResponse> {
  private static final org.apache.thrift.protocol.TStruct STRUCT_DESC = new org.apache.thrift.protocol.TStruct("WMGetTriggersForResourePlanResponse");

  private static final org.apache.thrift.protocol.TField TRIGGERS_FIELD_DESC = new org.apache.thrift.protocol.TField("triggers", org.apache.thrift.protocol.TType.LIST, (short)1);

  private static final org.apache.thrift.scheme.SchemeFactory STANDARD_SCHEME_FACTORY = new WMGetTriggersForResourePlanResponseStandardSchemeFactory();
  private static final org.apache.thrift.scheme.SchemeFactory TUPLE_SCHEME_FACTORY = new WMGetTriggersForResourePlanResponseTupleSchemeFactory();

  private @org.apache.thrift.annotation.Nullable java.util.List<WMTrigger> triggers; // optional

  /** The set of fields this struct contains, along with convenience methods for finding and manipulating them. */
  public enum _Fields implements org.apache.thrift.TFieldIdEnum {
    TRIGGERS((short)1, "triggers");

    private static final java.util.Map<java.lang.String, _Fields> byName = new java.util.HashMap<java.lang.String, _Fields>();

    static {
      for (_Fields field : java.util.EnumSet.allOf(_Fields.class)) {
        byName.put(field.getFieldName(), field);
      }
    }

    /**
     * Find the _Fields constant that matches fieldId, or null if its not found.
     */
    @org.apache.thrift.annotation.Nullable
    public static _Fields findByThriftId(int fieldId) {
      switch(fieldId) {
        case 1: // TRIGGERS
          return TRIGGERS;
        default:
          return null;
      }
    }

    /**
     * Find the _Fields constant that matches fieldId, throwing an exception
     * if it is not found.
     */
    public static _Fields findByThriftIdOrThrow(int fieldId) {
      _Fields fields = findByThriftId(fieldId);
      if (fields == null) throw new java.lang.IllegalArgumentException("Field " + fieldId + " doesn't exist!");
      return fields;
    }

    /**
     * Find the _Fields constant that matches name, or null if its not found.
     */
    @org.apache.thrift.annotation.Nullable
    public static _Fields findByName(java.lang.String name) {
      return byName.get(name);
    }

    private final short _thriftId;
    private final java.lang.String _fieldName;

    _Fields(short thriftId, java.lang.String fieldName) {
      _thriftId = thriftId;
      _fieldName = fieldName;
    }

    public short getThriftFieldId() {
      return _thriftId;
    }

    public java.lang.String getFieldName() {
      return _fieldName;
    }
  }

  // isset id assignments
  private static final _Fields optionals[] = {_Fields.TRIGGERS};
  public static final java.util.Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> metaDataMap;
  static {
    java.util.Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> tmpMap = new java.util.EnumMap<_Fields, org.apache.thrift.meta_data.FieldMetaData>(_Fields.class);
    tmpMap.put(_Fields.TRIGGERS, new org.apache.thrift.meta_data.FieldMetaData("triggers", org.apache.thrift.TFieldRequirementType.OPTIONAL, 
        new org.apache.thrift.meta_data.ListMetaData(org.apache.thrift.protocol.TType.LIST, 
            new org.apache.thrift.meta_data.StructMetaData(org.apache.thrift.protocol.TType.STRUCT, WMTrigger.class))));
    metaDataMap = java.util.Collections.unmodifiableMap(tmpMap);
    org.apache.thrift.meta_data.FieldMetaData.addStructMetaDataMap(WMGetTriggersForResourePlanResponse.class, metaDataMap);
  }

  public WMGetTriggersForResourePlanResponse() {
  }

  /**
   * Performs a deep copy on <i>other</i>.
   */
  public WMGetTriggersForResourePlanResponse(WMGetTriggersForResourePlanResponse other) {
    if (other.isSetTriggers()) {
      java.util.List<WMTrigger> __this__triggers = new java.util.ArrayList<WMTrigger>(other.triggers.size());
      for (WMTrigger other_element : other.triggers) {
        __this__triggers.add(new WMTrigger(other_element));
      }
      this.triggers = __this__triggers;
    }
  }

  public WMGetTriggersForResourePlanResponse deepCopy() {
    return new WMGetTriggersForResourePlanResponse(this);
  }

  @Override
  public void clear() {
    this.triggers = null;
  }

  public int getTriggersSize() {
    return (this.triggers == null) ? 0 : this.triggers.size();
  }

  @org.apache.thrift.annotation.Nullable
  public java.util.Iterator<WMTrigger> getTriggersIterator() {
    return (this.triggers == null) ? null : this.triggers.iterator();
  }

  public void addToTriggers(WMTrigger elem) {
    if (this.triggers == null) {
      this.triggers = new java.util.ArrayList<WMTrigger>();
    }
    this.triggers.add(elem);
  }

  @org.apache.thrift.annotation.Nullable
  public java.util.List<WMTrigger> getTriggers() {
    return this.triggers;
  }

  public void setTriggers(@org.apache.thrift.annotation.Nullable java.util.List<WMTrigger> triggers) {
    this.triggers = triggers;
  }

  public void unsetTriggers() {
    this.triggers = null;
  }

  /** Returns true if field triggers is set (has been assigned a value) and false otherwise */
  public boolean isSetTriggers() {
    return this.triggers != null;
  }

  public void setTriggersIsSet(boolean value) {
    if (!value) {
      this.triggers = null;
    }
  }

  public void setFieldValue(_Fields field, @org.apache.thrift.annotation.Nullable java.lang.Object value) {
    switch (field) {
    case TRIGGERS:
      if (value == null) {
        unsetTriggers();
      } else {
        setTriggers((java.util.List<WMTrigger>)value);
      }
      break;

    }
  }

  @org.apache.thrift.annotation.Nullable
  public java.lang.Object getFieldValue(_Fields field) {
    switch (field) {
    case TRIGGERS:
      return getTriggers();

    }
    throw new java.lang.IllegalStateException();
  }

  /** Returns true if field corresponding to fieldID is set (has been assigned a value) and false otherwise */
  public boolean isSet(_Fields field) {
    if (field == null) {
      throw new java.lang.IllegalArgumentException();
    }

    switch (field) {
    case TRIGGERS:
      return isSetTriggers();
    }
    throw new java.lang.IllegalStateException();
  }

  @Override
  public boolean equals(java.lang.Object that) {
    if (that instanceof WMGetTriggersForResourePlanResponse)
      return this.equals((WMGetTriggersForResourePlanResponse)that);
    return false;
  }

  public boolean equals(WMGetTriggersForResourePlanResponse that) {
    if (that == null)
      return false;
    if (this == that)
      return true;

    boolean this_present_triggers = true && this.isSetTriggers();
    boolean that_present_triggers = true && that.isSetTriggers();
    if (this_present_triggers || that_present_triggers) {
      if (!(this_present_triggers && that_present_triggers))
        return false;
      if (!this.triggers.equals(that.triggers))
        return false;
    }

    return true;
  }

  @Override
  public int hashCode() {
    int hashCode = 1;

    hashCode = hashCode * 8191 + ((isSetTriggers()) ? 131071 : 524287);
    if (isSetTriggers())
      hashCode = hashCode * 8191 + triggers.hashCode();

    return hashCode;
  }

  @Override
  public int compareTo(WMGetTriggersForResourePlanResponse other) {
    if (!getClass().equals(other.getClass())) {
      return getClass().getName().compareTo(other.getClass().getName());
    }

    int lastComparison = 0;

    lastComparison = java.lang.Boolean.compare(isSetTriggers(), other.isSetTriggers());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetTriggers()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.triggers, other.triggers);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    return 0;
  }

  @org.apache.thrift.annotation.Nullable
  public _Fields fieldForId(int fieldId) {
    return _Fields.findByThriftId(fieldId);
  }

  public void read(org.apache.thrift.protocol.TProtocol iprot) throws org.apache.thrift.TException {
    scheme(iprot).read(iprot, this);
  }

  public void write(org.apache.thrift.protocol.TProtocol oprot) throws org.apache.thrift.TException {
    scheme(oprot).write(oprot, this);
  }

  @Override
  public java.lang.String toString() {
    java.lang.StringBuilder sb = new java.lang.StringBuilder("WMGetTriggersForResourePlanResponse(");
    boolean first = true;

    if (isSetTriggers()) {
      sb.append("triggers:");
      if (this.triggers == null) {
        sb.append("null");
      } else {
        sb.append(this.triggers);
      }
      first = false;
    }
    sb.append(")");
    return sb.toString();
  }

  public void validate() throws org.apache.thrift.TException {
    // check for required fields
    // check for sub-struct validity
  }

  private void writeObject(java.io.ObjectOutputStream out) throws java.io.IOException {
    try {
      write(new org.apache.thrift.protocol.TCompactProtocol(new org.apache.thrift.transport.TIOStreamTransport(out)));
    } catch (org.apache.thrift.TException te) {
      throw new java.io.IOException(te);
    }
  }

  private void readObject(java.io.ObjectInputStream in) throws java.io.IOException, java.lang.ClassNotFoundException {
    try {
      read(new org.apache.thrift.protocol.TCompactProtocol(new org.apache.thrift.transport.TIOStreamTransport(in)));
    } catch (org.apache.thrift.TException te) {
      throw new java.io.IOException(te);
    }
  }

  private static class WMGetTriggersForResourePlanResponseStandardSchemeFactory implements org.apache.thrift.scheme.SchemeFactory {
    public WMGetTriggersForResourePlanResponseStandardScheme getScheme() {
      return new WMGetTriggersForResourePlanResponseStandardScheme();
    }
  }

  private static class WMGetTriggersForResourePlanResponseStandardScheme extends org.apache.thrift.scheme.StandardScheme<WMGetTriggersForResourePlanResponse> {

    public void read(org.apache.thrift.protocol.TProtocol iprot, WMGetTriggersForResourePlanResponse struct) throws org.apache.thrift.TException {
      org.apache.thrift.protocol.TField schemeField;
      iprot.readStructBegin();
      while (true)
      {
        schemeField = iprot.readFieldBegin();
        if (schemeField.type == org.apache.thrift.protocol.TType.STOP) { 
          break;
        }
        switch (schemeField.id) {
          case 1: // TRIGGERS
            if (schemeField.type == org.apache.thrift.protocol.TType.LIST) {
              {
                org.apache.thrift.protocol.TList _list1172 = iprot.readListBegin();
                struct.triggers = new java.util.ArrayList<WMTrigger>(_list1172.size);
                @org.apache.thrift.annotation.Nullable WMTrigger _elem1173;
                for (int _i1174 = 0; _i1174 < _list1172.size; ++_i1174)
                {
                  _elem1173 = new WMTrigger();
                  _elem1173.read(iprot);
                  struct.triggers.add(_elem1173);
                }
                iprot.readListEnd();
              }
              struct.setTriggersIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          default:
            org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
        }
        iprot.readFieldEnd();
      }
      iprot.readStructEnd();
      struct.validate();
    }

    public void write(org.apache.thrift.protocol.TProtocol oprot, WMGetTriggersForResourePlanResponse struct) throws org.apache.thrift.TException {
      struct.validate();

      oprot.writeStructBegin(STRUCT_DESC);
      if (struct.triggers != null) {
        if (struct.isSetTriggers()) {
          oprot.writeFieldBegin(TRIGGERS_FIELD_DESC);
          {
            oprot.writeListBegin(new org.apache.thrift.protocol.TList(org.apache.thrift.protocol.TType.STRUCT, struct.triggers.size()));
            for (WMTrigger _iter1175 : struct.triggers)
            {
              _iter1175.write(oprot);
            }
            oprot.writeListEnd();
          }
          oprot.writeFieldEnd();
        }
      }
      oprot.writeFieldStop();
      oprot.writeStructEnd();
    }

  }

  private static class WMGetTriggersForResourePlanResponseTupleSchemeFactory implements org.apache.thrift.scheme.SchemeFactory {
    public WMGetTriggersForResourePlanResponseTupleScheme getScheme() {
      return new WMGetTriggersForResourePlanResponseTupleScheme();
    }
  }

  private static class WMGetTriggersForResourePlanResponseTupleScheme extends org.apache.thrift.scheme.TupleScheme<WMGetTriggersForResourePlanResponse> {

    @Override
    public void write(org.apache.thrift.protocol.TProtocol prot, WMGetTriggersForResourePlanResponse struct) throws org.apache.thrift.TException {
      org.apache.thrift.protocol.TTupleProtocol oprot = (org.apache.thrift.protocol.TTupleProtocol) prot;
      java.util.BitSet optionals = new java.util.BitSet();
      if (struct.isSetTriggers()) {
        optionals.set(0);
      }
      oprot.writeBitSet(optionals, 1);
      if (struct.isSetTriggers()) {
        {
          oprot.writeI32(struct.triggers.size());
          for (WMTrigger _iter1176 : struct.triggers)
          {
            _iter1176.write(oprot);
          }
        }
      }
    }

    @Override
    public void read(org.apache.thrift.protocol.TProtocol prot, WMGetTriggersForResourePlanResponse struct) throws org.apache.thrift.TException {
      org.apache.thrift.protocol.TTupleProtocol iprot = (org.apache.thrift.protocol.TTupleProtocol) prot;
      java.util.BitSet incoming = iprot.readBitSet(1);
      if (incoming.get(0)) {
        {
          org.apache.thrift.protocol.TList _list1177 = iprot.readListBegin(org.apache.thrift.protocol.TType.STRUCT);
          struct.triggers = new java.util.ArrayList<WMTrigger>(_list1177.size);
          @org.apache.thrift.annotation.Nullable WMTrigger _elem1178;
          for (int _i1179 = 0; _i1179 < _list1177.size; ++_i1179)
          {
            _elem1178 = new WMTrigger();
            _elem1178.read(iprot);
            struct.triggers.add(_elem1178);
          }
        }
        struct.setTriggersIsSet(true);
      }
    }
  }

  private static <S extends org.apache.thrift.scheme.IScheme> S scheme(org.apache.thrift.protocol.TProtocol proto) {
    return (org.apache.thrift.scheme.StandardScheme.class.equals(proto.getScheme()) ? STANDARD_SCHEME_FACTORY : TUPLE_SCHEME_FACTORY).getScheme();
  }
}


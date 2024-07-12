using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Carrito_de_compras
    public class Carrito_de_compras
    {
        #region Member Variables
        protected int _Car_ID;
        protected int _User_ID;
        protected unknown _Fecha_creacion;
        protected string _Estado_pe;
        #endregion
        #region Constructors
        public Carrito_de_compras() { }
        public Carrito_de_compras(int User_ID, unknown Fecha_creacion, string Estado_pe)
        {
            this._User_ID=User_ID;
            this._Fecha_creacion=Fecha_creacion;
            this._Estado_pe=Estado_pe;
        }
        #endregion
        #region Public Properties
        public virtual int Car_ID
        {
            get {return _Car_ID;}
            set {_Car_ID=value;}
        }
        public virtual int User_ID
        {
            get {return _User_ID;}
            set {_User_ID=value;}
        }
        public virtual unknown Fecha_creacion
        {
            get {return _Fecha_creacion;}
            set {_Fecha_creacion=value;}
        }
        public virtual string Estado_pe
        {
            get {return _Estado_pe;}
            set {_Estado_pe=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Cuenta
    public class Cuenta
    {
        #region Member Variables
        protected int _User_ID;
        protected int _Cedula_U;
        protected string _Nombre_U;
        protected string _Correo_electronico;
        protected string _Contraseña_U;
        #endregion
        #region Constructors
        public Cuenta() { }
        public Cuenta(int Cedula_U, string Nombre_U, string Correo_electronico, string Contraseña_U)
        {
            this._Cedula_U=Cedula_U;
            this._Nombre_U=Nombre_U;
            this._Correo_electronico=Correo_electronico;
            this._Contraseña_U=Contraseña_U;
        }
        #endregion
        #region Public Properties
        public virtual int User_ID
        {
            get {return _User_ID;}
            set {_User_ID=value;}
        }
        public virtual int Cedula_U
        {
            get {return _Cedula_U;}
            set {_Cedula_U=value;}
        }
        public virtual string Nombre_U
        {
            get {return _Nombre_U;}
            set {_Nombre_U=value;}
        }
        public virtual string Correo_electronico
        {
            get {return _Correo_electronico;}
            set {_Correo_electronico=value;}
        }
        public virtual string Contraseña_U
        {
            get {return _Contraseña_U;}
            set {_Contraseña_U=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Entrega_del_producto
    public class Entrega_del_producto
    {
        #region Member Variables
        protected int _delivery_ID;
        protected int _orden_ID;
        protected unknown _entrega_estimada;
        protected string _estado_entrega;
        #endregion
        #region Constructors
        public Entrega_del_producto() { }
        public Entrega_del_producto(int orden_ID, unknown entrega_estimada, string estado_entrega)
        {
            this._orden_ID=orden_ID;
            this._entrega_estimada=entrega_estimada;
            this._estado_entrega=estado_entrega;
        }
        #endregion
        #region Public Properties
        public virtual int Delivery_ID
        {
            get {return _delivery_ID;}
            set {_delivery_ID=value;}
        }
        public virtual int Orden_ID
        {
            get {return _orden_ID;}
            set {_orden_ID=value;}
        }
        public virtual unknown Entrega_estimada
        {
            get {return _entrega_estimada;}
            set {_entrega_estimada=value;}
        }
        public virtual string Estado_entrega
        {
            get {return _estado_entrega;}
            set {_estado_entrega=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Factura_digital
    public class Factura_digital
    {
        #region Member Variables
        protected int _invioce_ID;
        protected int _Orden_ID;
        protected unknown _Fecha_emision;
        protected string _Detalle_productos;
        protected unknown _Pago_efectuado;
        #endregion
        #region Constructors
        public Factura_digital() { }
        public Factura_digital(int Orden_ID, unknown Fecha_emision, string Detalle_productos, unknown Pago_efectuado)
        {
            this._Orden_ID=Orden_ID;
            this._Fecha_emision=Fecha_emision;
            this._Detalle_productos=Detalle_productos;
            this._Pago_efectuado=Pago_efectuado;
        }
        #endregion
        #region Public Properties
        public virtual int Invioce_ID
        {
            get {return _invioce_ID;}
            set {_invioce_ID=value;}
        }
        public virtual int Orden_ID
        {
            get {return _Orden_ID;}
            set {_Orden_ID=value;}
        }
        public virtual unknown Fecha_emision
        {
            get {return _Fecha_emision;}
            set {_Fecha_emision=value;}
        }
        public virtual string Detalle_productos
        {
            get {return _Detalle_productos;}
            set {_Detalle_productos=value;}
        }
        public virtual unknown Pago_efectuado
        {
            get {return _Pago_efectuado;}
            set {_Pago_efectuado=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Pedido
    public class Pedido
    {
        #region Member Variables
        protected int _Orden_ID;
        protected int _User_ID;
        protected string _Nombre_pe;
        protected unknown _Fecha_pe;
        protected string _Estado_pe;
        protected string _Dirección_U;
        protected string _Metodo_pago;
        #endregion
        #region Constructors
        public Pedido() { }
        public Pedido(int User_ID, string Nombre_pe, unknown Fecha_pe, string Estado_pe, string Dirección_U, string Metodo_pago)
        {
            this._User_ID=User_ID;
            this._Nombre_pe=Nombre_pe;
            this._Fecha_pe=Fecha_pe;
            this._Estado_pe=Estado_pe;
            this._Dirección_U=Dirección_U;
            this._Metodo_pago=Metodo_pago;
        }
        #endregion
        #region Public Properties
        public virtual int Orden_ID
        {
            get {return _Orden_ID;}
            set {_Orden_ID=value;}
        }
        public virtual int User_ID
        {
            get {return _User_ID;}
            set {_User_ID=value;}
        }
        public virtual string Nombre_pe
        {
            get {return _Nombre_pe;}
            set {_Nombre_pe=value;}
        }
        public virtual unknown Fecha_pe
        {
            get {return _Fecha_pe;}
            set {_Fecha_pe=value;}
        }
        public virtual string Estado_pe
        {
            get {return _Estado_pe;}
            set {_Estado_pe=value;}
        }
        public virtual string Dirección_U
        {
            get {return _Dirección_U;}
            set {_Dirección_U=value;}
        }
        public virtual string Metodo_pago
        {
            get {return _Metodo_pago;}
            set {_Metodo_pago=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Productos
    public class Productos
    {
        #region Member Variables
        protected int _Producto_ID;
        protected string _Nombre_pdt;
        protected string _Categoria_pdt;
        protected string _Imagen_pdt;
        protected string _Descripcion_pdt;
        protected unknown _Precio_pdt;
        protected bool _Disponibilidad_pdt;
        #endregion
        #region Constructors
        public Productos() { }
        public Productos(string Nombre_pdt, string Categoria_pdt, string Imagen_pdt, string Descripcion_pdt, unknown Precio_pdt, bool Disponibilidad_pdt)
        {
            this._Nombre_pdt=Nombre_pdt;
            this._Categoria_pdt=Categoria_pdt;
            this._Imagen_pdt=Imagen_pdt;
            this._Descripcion_pdt=Descripcion_pdt;
            this._Precio_pdt=Precio_pdt;
            this._Disponibilidad_pdt=Disponibilidad_pdt;
        }
        #endregion
        #region Public Properties
        public virtual int Producto_ID
        {
            get {return _Producto_ID;}
            set {_Producto_ID=value;}
        }
        public virtual string Nombre_pdt
        {
            get {return _Nombre_pdt;}
            set {_Nombre_pdt=value;}
        }
        public virtual string Categoria_pdt
        {
            get {return _Categoria_pdt;}
            set {_Categoria_pdt=value;}
        }
        public virtual string Imagen_pdt
        {
            get {return _Imagen_pdt;}
            set {_Imagen_pdt=value;}
        }
        public virtual string Descripcion_pdt
        {
            get {return _Descripcion_pdt;}
            set {_Descripcion_pdt=value;}
        }
        public virtual unknown Precio_pdt
        {
            get {return _Precio_pdt;}
            set {_Precio_pdt=value;}
        }
        public virtual bool Disponibilidad_pdt
        {
            get {return _Disponibilidad_pdt;}
            set {_Disponibilidad_pdt=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Usuario
    public class Usuario
    {
        #region Member Variables
        protected int _User_ID;
        protected int _Cedula_U;
        protected string _Nombre_U;
        protected string _Apellido_U;
        protected unknown _fecha_nacimiento;
        protected string _Correo_electronico;
        protected string _Dirrecion_U;
        protected string _Celular_U;
        #endregion
        #region Constructors
        public Usuario() { }
        public Usuario(int Cedula_U, string Nombre_U, string Apellido_U, unknown fecha_nacimiento, string Correo_electronico, string Dirrecion_U, string Celular_U)
        {
            this._Cedula_U=Cedula_U;
            this._Nombre_U=Nombre_U;
            this._Apellido_U=Apellido_U;
            this._fecha_nacimiento=fecha_nacimiento;
            this._Correo_electronico=Correo_electronico;
            this._Dirrecion_U=Dirrecion_U;
            this._Celular_U=Celular_U;
        }
        #endregion
        #region Public Properties
        public virtual int User_ID
        {
            get {return _User_ID;}
            set {_User_ID=value;}
        }
        public virtual int Cedula_U
        {
            get {return _Cedula_U;}
            set {_Cedula_U=value;}
        }
        public virtual string Nombre_U
        {
            get {return _Nombre_U;}
            set {_Nombre_U=value;}
        }
        public virtual string Apellido_U
        {
            get {return _Apellido_U;}
            set {_Apellido_U=value;}
        }
        public virtual unknown Fecha_nacimiento
        {
            get {return _fecha_nacimiento;}
            set {_fecha_nacimiento=value;}
        }
        public virtual string Correo_electronico
        {
            get {return _Correo_electronico;}
            set {_Correo_electronico=value;}
        }
        public virtual string Dirrecion_U
        {
            get {return _Dirrecion_U;}
            set {_Dirrecion_U=value;}
        }
        public virtual string Celular_U
        {
            get {return _Celular_U;}
            set {_Celular_U=value;}
        }
        #endregion
    }
    #endregion
}
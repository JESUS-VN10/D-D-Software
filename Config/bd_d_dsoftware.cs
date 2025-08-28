using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bd_ddsoftware
{
    #region Compra
    public class Compra
    {
        #region Member Variables
        protected int _ID;
        protected string _ID_transaccion;
        protected DateTime _Fecha;
        protected string _Status;
        protected string _Correo;
        protected string _ID_cliente;
        protected unknown _Total;
        #endregion
        #region Constructors
        public Compra() { }
        public Compra(string ID_transaccion, DateTime Fecha, string Status, string Correo, string ID_cliente, unknown Total)
        {
            this._ID_transaccion=ID_transaccion;
            this._Fecha=Fecha;
            this._Status=Status;
            this._Correo=Correo;
            this._ID_cliente=ID_cliente;
            this._Total=Total;
        }
        #endregion
        #region Public Properties
        public virtual int ID
        {
            get {return _ID;}
            set {_ID=value;}
        }
        public virtual string ID_transaccion
        {
            get {return _ID_transaccion;}
            set {_ID_transaccion=value;}
        }
        public virtual DateTime Fecha
        {
            get {return _Fecha;}
            set {_Fecha=value;}
        }
        public virtual string Status
        {
            get {return _Status;}
            set {_Status=value;}
        }
        public virtual string Correo
        {
            get {return _Correo;}
            set {_Correo=value;}
        }
        public virtual string ID_cliente
        {
            get {return _ID_cliente;}
            set {_ID_cliente=value;}
        }
        public virtual unknown Total
        {
            get {return _Total;}
            set {_Total=value;}
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
    #region Detalle_compra
    public class Detalle_compra
    {
        #region Member Variables
        protected int _ID;
        protected int _ID_compra;
        protected int _ID_producto;
        protected string _Nombre;
        protected unknown _Precio;
        protected int _Cantidad;
        #endregion
        #region Constructors
        public Detalle_compra() { }
        public Detalle_compra(int ID_compra, int ID_producto, string Nombre, unknown Precio, int Cantidad)
        {
            this._ID_compra=ID_compra;
            this._ID_producto=ID_producto;
            this._Nombre=Nombre;
            this._Precio=Precio;
            this._Cantidad=Cantidad;
        }
        #endregion
        #region Public Properties
        public virtual int ID
        {
            get {return _ID;}
            set {_ID=value;}
        }
        public virtual int ID_compra
        {
            get {return _ID_compra;}
            set {_ID_compra=value;}
        }
        public virtual int ID_producto
        {
            get {return _ID_producto;}
            set {_ID_producto=value;}
        }
        public virtual string Nombre
        {
            get {return _Nombre;}
            set {_Nombre=value;}
        }
        public virtual unknown Precio
        {
            get {return _Precio;}
            set {_Precio=value;}
        }
        public virtual int Cantidad
        {
            get {return _Cantidad;}
            set {_Cantidad=value;}
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
        protected string _Nombre;
        protected unknown _Precio;
        protected string _Descripcion;
        protected bool _Descuento;
        protected int _Activo;
        #endregion
        #region Constructors
        public Productos() { }
        public Productos(string Nombre, unknown Precio, string Descripcion, bool Descuento, int Activo)
        {
            this._Nombre=Nombre;
            this._Precio=Precio;
            this._Descripcion=Descripcion;
            this._Descuento=Descuento;
            this._Activo=Activo;
        }
        #endregion
        #region Public Properties
        public virtual int Producto_ID
        {
            get {return _Producto_ID;}
            set {_Producto_ID=value;}
        }
        public virtual string Nombre
        {
            get {return _Nombre;}
            set {_Nombre=value;}
        }
        public virtual unknown Precio
        {
            get {return _Precio;}
            set {_Precio=value;}
        }
        public virtual string Descripcion
        {
            get {return _Descripcion;}
            set {_Descripcion=value;}
        }
        public virtual bool Descuento
        {
            get {return _Descuento;}
            set {_Descuento=value;}
        }
        public virtual int Activo
        {
            get {return _Activo;}
            set {_Activo=value;}
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
        protected string _Nombre_U;
        protected unknown _Cedula_U;
        protected string _Correo_electronico;
        protected string _Contraseña;
        #endregion
        #region Constructors
        public Usuario() { }
        public Usuario(string Nombre_U, unknown Cedula_U, string Correo_electronico, string Contraseña)
        {
            this._Nombre_U=Nombre_U;
            this._Cedula_U=Cedula_U;
            this._Correo_electronico=Correo_electronico;
            this._Contraseña=Contraseña;
        }
        #endregion
        #region Public Properties
        public virtual int User_ID
        {
            get {return _User_ID;}
            set {_User_ID=value;}
        }
        public virtual string Nombre_U
        {
            get {return _Nombre_U;}
            set {_Nombre_U=value;}
        }
        public virtual unknown Cedula_U
        {
            get {return _Cedula_U;}
            set {_Cedula_U=value;}
        }
        public virtual string Correo_electronico
        {
            get {return _Correo_electronico;}
            set {_Correo_electronico=value;}
        }
        public virtual string Contraseña
        {
            get {return _Contraseña;}
            set {_Contraseña=value;}
        }
        #endregion
    }
    #endregion
}
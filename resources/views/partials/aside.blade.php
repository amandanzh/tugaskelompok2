 <!-- ============================================================== -->
 <!-- Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <style>
   .sidebar-item.item {
    display: none;
   }
 </style>
 <aside class="left-sidebar" data-sidebarbg="skin6">
   <!-- Sidebar scroll-->
   <div class="scroll-sidebar">
     <!-- Sidebar navigation-->
     <nav class="sidebar-nav">
       <ul id="sidebarnav">
         <!-- User Profile-->
         <li class="sidebar-item pt-2">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home') }}" aria-expanded="false">
             <i class="far fa-clock" aria-hidden="true"></i>
             <span class="hide-menu">Home</span>
           </a>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('katalog.index') }}" aria-expanded="false">
             <i class="fa fa-table" aria-hidden="true"></i>
             <span class="hide-menu">Katalog</span>
           </a>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('transaksi.index') }}" aria-expanded="false">
             <i class="fa fa-table" aria-hidden="true"></i>
             <span class="hide-menu">Transaksi</span>
           </a>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('riwayat.index') }}" aria-expanded="false">
             <i class="fa fa-table" aria-hidden="true"></i>
             <span class="hide-menu">Riwayat Transaksi</span>
           </a>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('neraca.index') }}" aria-expanded="false">
             <i class="fa fa-table" aria-hidden="true"></i>
             <span class="hide-menu">Neraca</span>
           </a>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('kategori.index') }}" aria-expanded="false">
             <i class="fa fa-table" aria-hidden="true"></i>
             <span class="hide-menu">Data Kategori</span>
           </a>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pengguna.index') }}" aria-expanded="false">
             <i class="fa fa-table" aria-hidden="true"></i>
             <span class="hide-menu">Data Pengguna</span>
           </a>
         </li>
         <!-- <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data-barang.php" aria-expanded="false">
             <i class="fa fa-font" aria-hidden="true"></i>
             <span class="hide-menu">Data Barang</span>
           </a>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data-supplier.php" aria-expanded="false">
             <i class="fa fa-globe" aria-hidden="true"></i>
             <span class="hide-menu">Data Supplier</span>
           </a>
         </li>

         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" onclick="showDropdown(this)" aria-expanded="false">
             <i class="fa fa-globe" aria-hidden="true"></i>
             <span class="hide-menu">Transaksi</span>
           </a>
         </li>

         <li class="sidebar-item item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="barang-masuk.php" aria-expanded="false">
             <i class="fa fa-globe" aria-hidden="true"></i>
             <span class="hide-menu">Barang Masuk</span>
           </a>
         </li>

         <li class="sidebar-item item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="barang-keluar.php" aria-expanded="false">
             <i class="fa fa-globe" aria-hidden="true"></i>
             <span class="hide-menu">Barang Keluar</span>
           </a>
         </li>

         <li class="sidebar-item">
           <a class="sidebar-link waves-effect waves-dark sidebar-link" href="laporan.php" aria-expanded="false">
             <i class="fa fa-globe" aria-hidden="true"></i>
             <span class="hide-menu">Laporan</span>
           </a>
         </li> -->

         <li class="text-center p-20 upgrade-btn">
          <form action="{{ route('logout') }}" class="d-block" method="POST">
            @csrf
            <button type="submit" class="btn d-grid btn-danger w-100 text-white">Log out</button>
          </form>
           <!-- <a href=""  >
             Log Out</a> -->
         </li>
       </ul>
     </nav>
     <!-- End Sidebar navigation -->
   </div>
   <!-- End Sidebar scroll-->
 </aside>
 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->

 </script>
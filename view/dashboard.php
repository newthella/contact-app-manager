<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Dashboard</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/js/config.js"></script>
</head>

<body>
    <?php if(isset($_SESSION['success'])): ?>
      <div class="alert alert-primary" role="alert" style="position: absolute;left: 50%;top: 10%;transform: translate(-50%,-50%);"><?= $_SESSION['success'];?></div>
    <?php unset($_SESSION['success']); endif; ?>
    <?php if(isset($_SESSION['errors'])): ?>
      <div class="alert alert-danger" role="alert" style="position: absolute;left: 50%;top: 10%;transform: translate(-50%,-50%);"><?= $_SESSION['errors'];?></div>
    <?php unset($_SESSION['errors']);endif ?>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo" style="padding-left: 1rem !important;">
          <a href="" class="app-brand-link">
            <span class="app-logo">
              <svg width="50px" height="50px" viewBox="0 -56 1136 1136" class="icon" version="1.1"
                xmlns="http://www.w3.org/2000/svg" fill="#000000">

                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                <g id="SVGRepo_iconCarrier">

                  <path
                    d="M354.461538 599.630769l481.87077-350.523077v316.849231s-8.664615 46.08-56.32 46.08c-47.852308 0-396.406154 9.255385-425.55077-12.406154z"
                    fill="#E3D9EA" />

                  <path
                    d="M878.867692 93.932308H303.458462c-26.387692 0-47.852308 24.221538-47.852308 53.956923v729.993846c0 29.538462 21.464615 53.956923 47.852308 53.956923h575.40923c26.387692 0 47.852308-24.221538 47.852308-53.956923V147.889231c0.196923-29.538462-21.464615-53.956923-47.852308-53.956923z m-42.535384 464.147692c0 29.538462-21.464615 53.956923-47.852308 53.956923h-403.692308c-26.387692 0-47.852308-24.221538-47.852307-53.956923v-309.169231c0-29.538462 21.464615-53.956923 47.852307-53.956923h403.495385c26.387692 0 47.852308 24.221538 47.852308 53.956923v309.169231z"
                    fill="#696cff" />

                  <path
                    d="M879.064615 945.230769H303.458462c-33.870769 0-61.243077-30.129231-61.243077-67.347692V147.889231c0-37.218462 27.569231-67.347692 61.243077-67.347693h575.40923c33.870769 0 61.243077 30.129231 61.243077 67.347693v729.993846c0.196923 37.218462-27.372308 67.347692-61.046154 67.347692zM303.458462 107.52c-18.904615 0-34.461538 18.116923-34.461539 40.369231v729.993846c0 22.252308 15.36 40.369231 34.461539 40.369231h575.40923c18.904615 0 34.461538-18.116923 34.461539-40.369231V147.889231c0-22.252308-15.36-40.369231-34.461539-40.369231H303.458462z m484.824615 517.907692H384.787692c-33.870769 0-61.243077-30.129231-61.243077-67.347692v-309.169231c0-37.218462 27.569231-67.347692 61.243077-67.347692h403.495385c33.870769 0 61.243077 30.129231 61.243077 67.347692v309.169231c0.196923 37.218462-27.372308 67.347692-61.243077 67.347692zM384.787692 208.738462c-18.904615 0-34.461538 18.116923-34.461538 40.36923v309.169231c0 22.252308 15.36 40.369231 34.461538 40.369231h403.495385c18.904615 0 34.461538-18.116923 34.461538-40.369231v-309.169231c0-22.252308-15.36-40.369231-34.461538-40.36923H384.787692z"
                    fill="#493B4E" />

                  <path
                    d="M694.153846 798.326154H490.338462c-7.286154 0-13.390769-5.907692-13.39077-13.390769v-34.067693c0-7.286154 5.907692-13.390769 13.39077-13.390769h203.815384c7.286154 0 13.390769 5.907692 13.390769 13.390769v34.067693c0 7.483077-6.104615 13.390769-13.390769 13.390769z"
                    fill="#493B4E" />

                  <path
                    d="M677.021538 807.384615h-169.550769c-21.661538 0-39.384615-17.723077-39.384615-39.384615s17.723077-39.384615 39.384615-39.384615h169.550769c21.661538 0 39.384615 17.723077 39.384616 39.384615s-17.723077 39.384615-39.384616 39.384615z m-169.550769-60.84923c-11.815385 0-21.464615 9.649231-21.464615 21.464615s9.649231 21.464615 21.464615 21.464615h169.550769c11.815385 0 21.464615-9.649231 21.464616-21.464615s-9.649231-21.464615-21.464616-21.464615h-169.550769z"
                    fill="#493B4E" />
                </g>
              </svg> </span>
            <span class="app-brand-text demo menu-text fw-semibold">contact app</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <li class="menu-item active">
            <a href="#" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/contact-app-manager/logout" class="menu-link">
              <i class="menu-icon tf-icons bx bx-log-out"></i>
              <div data-i18n="Tables">Log out</div>
            </a>
          </li>
        </ul>
      </aside>

      <div class="layout-page">
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <?php if(isset($_GET['failed'])) { ?>
              <div class="alert alert-danger" role="alert"><?= $_GET['failed'];?></div>
            <?php } else if(isset($_GET['success'])) { ?>
              <div class="alert alert-primary" role="alert"><?= $_GET['success'];?></div>
            <?php }?>

            <h4 class="fw-bold py-3 mb-4">Dashboard</h4>
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#modalCenter" style="margin-bottom: 1rem;"
            >
              Tambah Data
            </button>
            <div class="card">
              <h5 class="card-header">Contacts</h5>
              <div class="table-responsive text-nowrap" style="min-height: 20rem !important">
                <table class="table" >
                  <thead>
                    <tr>
                      <th>Nomor ID</th>
                      <th>Nomor Telepon</th>
                      <th>Owner</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php foreach($data as $item): ?>
                      <tr>
                      <form action="/contact-app-manager/delete" method="POST">
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $item['id'];?></strong></td>
                      <td><?= $item['nomor_telepon'];?></td>
                      <td><?= $item['owner'];?></td>
                      <td>
                          <input type="hidden" value="<?= $item['id'] ?>" name="id" id="">
                          <button type="submit" class="badge bg-danger">Hapus</button>
                          <button type="button" data-id="<?= $item['id'] ?>" class="editBtn badge bg-warning" data-bs-toggle="modal" data-bs-target="#basicModal"> Edit</button>
                        </td>
                      </form>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">newthella</a>
                </div>
              </div>
            </footer>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <form class="modal-content" method="POST" action="/contact-app-manager/create">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Tambah data kontak</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameWithTitle" class="form-label">Nama</label>
                  <input
                    type="text"
                    id="nameWithTitle"
                    class="form-control"
                    placeholder="Masukkan nama pemilik nomor telepon"
                    name="owner"
                  />
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailWithTitle" class="form-label">Nomor Telepon</label>
                  <input
                    type="text"
                    id="emailWithTitle"
                    class="form-control"
                    placeholder="+62 xxxxxxxxx"
                    name="nomor_telepon"
                  />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form action="/contact-app-manager/update" method="post" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Edit data kontak</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Nama</label>
                  <input type="text" name="owner" id="nameBasic" class="form-control" placeholder="Masukkan nama pemilik nomor telepon" />
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">Nomor Telepon</label>
                  <input name="nomor_telepon" type="text" id="emailBasic" class="form-control" placeholder="+62 xxxxxxxxx" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id" id="editId">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </form>
        </div>
      </div>

    <script>
      document.querySelectorAll('.editBtn').forEach(
        element => {
          element.addEventListener('click', (e) => {
        document.querySelector('#editId').value = e.target.dataset.id;
      });
        }
      )
    </script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
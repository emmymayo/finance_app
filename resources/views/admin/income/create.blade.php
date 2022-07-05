<!-- Pleas add this to the header -->
<script src="//unpkg.com/alpinejs" defer></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Finace | Create Income</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Finance</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{route('admin.dashboard')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Task</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseIncome" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Income Type
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseIncome" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('admin.income-types.index')}}"> Income Types</a>
                                <a class="nav-link" href="{{route('admin.incomes.create')}}">Add Income</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePayer"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Payer Type
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePayer" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('admin.payer-types.index')}}"> Payer Types</a>
                                <a class="nav-link" href="{{route('admin.payers.index')}}"> Payers</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            User
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Add User</a>
                                <a class="nav-link" href="#">Add Admin</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="{{route('admin.reports')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Annual Summary
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Finance
                </div>
            </nav>
        </div>

        <!-- Page Content -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 mb-3">Add Income</h1>
                    <div class="row">
                        <!-- Place to Place New Content -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Input Income
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Income Type</th>
                                            <th>Payer Class</th>
                                            <th>Amount</th>
                                            <th>Payment Method</th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Income Type</th>
                                            <th>Payer Class</th>
                                            <th>Amount</th>
                                            <th>Payment Method</th>
                                            <th>Remark</th>
                                        </tr>
                                    </tfoot>
                                    <form action="{{route('admin.incomes.store')}}" method="post" onsubmit="validate()">
                                        @csrf

                                        <div x-data="{ showPayerComponent : false}" x-cloak>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <label for="payment_date">Date</label>
                                                            <input type="date" name="payment_date" id="payment_date"
                                                                value="{{date('Y-m-d')}}">
                                                            <br>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <label for="income_type_id">Income Type</label>
                                                            <select name="income_type_id" id="income_type_id">
                                                                @foreach ( $incomeTypes as $incomeType )
                                                                <option value="{{$incomeType->id}}">
                                                                    {{$incomeType->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="d-flex justify-content-around">
                                                        <div>
                                                            <label for="payer_type">Payer Class</label>
                                                            <select name="payer_type" id="payer_type"
                                                                @change="$el.value != '' ? showPayerComponent = true : showPayerComponent = false">
                                                                <option value=""></option>
                                                                @foreach ( $payerTypes as $payerType )
                                                                <option value="{{$payerType->id}}">
                                                                    {{$payerType->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div x-show="showPayerComponent">
                                                            <label for="payer">Payer</label>
                                                            <!-- <select name="payer_id" id="payer_id"></select> -->
                                                            <div>
                                                                <input type="search" name="payer" id="payer"
                                                                    onchange="findPayer()">
                                                                <div id="choices"></div>
                                                            </div>
                                                            <input type="hidden" name="payer_id" id="payer_id">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <label for="amount">Amount</label>
                                                            <input type="number" name="amount" id="amount">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <label for="payment_method">Payment Method</label>
                                                            <select required name="payment_method" id="payment_method">
                                                                <option value=""></option>
                                                                @foreach ($paymentMethodMapping as $key => $value )
                                                                <option value="{{$key}}">
                                                                    {{$value}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <label for="remark">Remark</label>
                                                            <input type="text" name="remark" id="remark">
                                                        </div>
                                                    </td>
                                                    {{-- <td>
                                                    </td> --}}
                                                    <button class="btn btn-success" type="submit">Submit</button>
                                                </tr>
                                            </tbody>
                                        </div>
                                    </form>
                                </table>
                            </div>
                        </div>
                        <!-- Place to Place New Content -->
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Gethsemane HQ 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Page Content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>
    <script>
        // const choices = new Choices('#payer_id');
          
        // document.querySelector('#payer_type').addEventListener('change', async ()=>{
        //     try {
        //         let payersAPIResponse = await fetch(`/api/payers/payer-type/${event.target.value}`);
        //         payersAPIResponse = await payersAPIResponse.json();
        //         choices.setChoices(payersAPIResponse.payers, 'id', 'name', false);
    
        //     } catch (err) {
        //         // console.error(err);
        //     }
        // });
    
        async function findPayer(){
            let payer_type = document.querySelector('#payer_type').value;
            let payer = event.target.value;
    
            let payersAPIResponse = await fetch(`/api/payers/payer-type/${payer_type}?q=${payer}`);
                payersAPIResponse = await payersAPIResponse.json();
    
            setChoices(payersAPIResponse.payers);
            
        }
    
        function setChoices(items = []){
            choices = items.map((payer)=>{
                                return `<div onclick="setPayer(${payer.id})"> ${payer.name}</div>`;
                            });
            document.querySelector('#choices').innerHTML = choices;
        }
    
        function setPayer(id=''){
            document.querySelector('#payer_id').value = id;
        }
            
    
    
        function submitIncome(){
            let paymentDate = document.querySelector('#payment_date').value;
            let incomeTypeID = document.querySelector('#income_type_id').value;
            let payerType = document.querySelector('#payer_type').value;
            let amount = document.querySelector('#amount').value;
            let paymentMethod = document.querySelector('#payment_method').value;
            let remark = document.querySelector('#remark').value;
    
            let data = {
    
            }
        }
    
        function validate(){
            event.preventDefault();
            // console.log(event.target);
            if(document.querySelector('#payer_id').value === ''){
                alert('Select a payer');
    
            }
            event.target.submit();
        }
            
    </script>
</body>

</html>

{{-- <form action="{{route('admin.incomes.store')}}" method="post" onsubmit="validate()"> @csrf

    <div x-data="{ showPayerComponent : false}" x-cloak>
        <div>
            <label for="payment_date">Date</label>
            <input type="date" name="payment_date" id="payment_date" value="{{date('Y-m-d')}}">
            <br>
        </div>

        <div>
            <label for="income_type_id">Income Type</label>
            <select name="income_type_id" id="income_type_id">
                @foreach ( $incomeTypes as $incomeType )
                <option value="{{$incomeType->id}}">
                    {{$incomeType->name}}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="payer_type">Payer Class</label>
            <select name="payer_type" id="payer_type"
                @change="$el.value != '' ? showPayerComponent = true : showPayerComponent = false">
                <option value=""></option>
                @foreach ( $payerTypes as $payerType )
                <option value="{{$payerType->id}}">
                    {{$payerType->name}}
                </option>
                @endforeach
            </select>
        </div>

        <div x-show="showPayerComponent">
            <label for="payer">Payer</label>
            <!-- <select name="payer_id" id="payer_id"></select> -->
            <div>
                <input type="search" name="payer" id="payer" onchange="findPayer()">
                <div id="choices"></div>
            </div>
            <input type="hidden" name="payer_id" id="payer_id">
        </div>

        <div>
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount">
        </div>

        <div>
            <label for="payment_method">Payment Method</label>
            <select required name="payment_method" id="payment_method">
                <option value=""></option>
                @foreach ($paymentMethodMapping as $key => $value )
                <option value="{{$key}}">
                    {{$value}}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="remark">Remark</label>
            <input type="text" name="remark" id="remark">
        </div>

        <button type="submit">Submit</button>
    </div>
</form> --}}
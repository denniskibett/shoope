<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoope Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --fresh-green: #0aad0a;
            --fresh-green-light: #e7f8e7;
            --fresh-gray: #f5f7f8;
            --fresh-text: #2d3748;
            --fresh-border: #e2e8f0;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #f8fafc;
            color: var(--fresh-text);
        }
        
        .sidebar {
            width: 280px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            transition: all 0.3s;
        }
        
        .main-content {
            margin-left: 280px;
            padding: 24px;
            transition: all 0.3s;
        }
        
        .nav-link {
            color: #64748b;
            border-radius: 8px;
            padding: 10px 16px;
            margin-bottom: 4px;
            font-weight: 500;
            display: flex;
            align-items: center;
            transition: all 0.2s;
        }
        
        .nav-link:hover, .nav-link.active {
            background: var(--fresh-green-light);
            color: var(--fresh-green);
        }
        
        .nav-link i {
            width: 24px;
            margin-right: 12px;
            text-align: center;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
            border: 1px solid var(--fresh-border);
            padding: 24px;
            height: 100%;
            transition: transform 0.3s;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        
        .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 16px;
        }
        
        .card-value {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 4px;
        }
        
        .card-title {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 8px;
        }
        
        .card-change {
            font-size: 12px;
            font-weight: 500;
            display: flex;
            align-items: center;
        }
        
        .change-up {
            color: #0aad0a;
        }
        
        .change-down {
            color: #e53e3e;
        }
        
        .header {
            background: white;
            border-bottom: 1px solid var(--fresh-border);
            padding: 16px 24px;
            position: sticky;
            top: 0;
            z-index: 50;
        }
        
        .search-bar {
            background: var(--fresh-gray);
            border: none;
            border-radius: 8px;
            padding: 10px 16px;
            width: 300px;
            transition: all 0.3s;
        }
        
        .search-bar:focus {
            width: 400px;
            outline: none;
            box-shadow: 0 0 0 4px rgba(10, 173, 10, 0.2);
        }
        
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #e53e3e;
            color: white;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .chart-container {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
            border: 1px solid var(--fresh-border);
        }
        
        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        
        .chart-title {
            font-size: 18px;
            font-weight: 600;
        }
        
        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--fresh-border);
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }
        
        .table th {
            background: var(--fresh-gray);
            padding: 16px 24px;
            font-weight: 600;
            color: #64748b;
        }
        
        .table td {
            padding: 16px 24px;
            vertical-align: middle;
        }
        
        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .status-completed {
            background: #e7f8e7;
            color: #0aad0a;
        }
        
        .status-pending {
            background: #fef6e7;
            color: #f59e0b;
        }
        
        .status-cancelled {
            background: #fee7e7;
            color: #e53e3e;
        }
        
        .avatar-sm {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--fresh-text);
        }
        
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="p-4 border-bottom">
            <h2 class="fw-bold text-success">Shoope</h2>
        </div>
        <div class="p-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-basket"></i>
                        Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-list"></i>
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i>
                        Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-bar"></i>
                        Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
 <!-- Header -->
        <header class="header mb-4 rounded">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <button class="mobile-menu-btn me-3">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h4 class="mb-0">Dashboard</h4>
                </div>
                
                <div class="d-flex align-items-center">
                    <div class="position-relative me-3 d-none d-md-block">
                        <input type="text" class="search-bar" placeholder="Search...">
                        <i class="fas fa-search position-absolute" style="top: 12px; right: 16px; color: #94a3b8;"></i>
                    </div>
                    
                    <div class="position-relative me-3 me-lg-4">
                        <button class="btn p-0">
                            <i class="fas fa-bell fs-5 text-gray-600"></i>
                        </button>
                        <span class="notification-badge">3</span>
                    </div>
                    
                    <div class="dropdown">
                        <button class="btn p-0 dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown">
                            <div class="user-info">
                                <img src="https://ui-avatars.com/api/?name=Jane+Cooper&background=0aad0a&color=fff" class="user-avatar">
                                <span class="user-name d-none d-md-inline">Jane Cooper</span>
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="dashboard-card">
                    <div class="card-icon bg-success bg-opacity-10 text-success">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-value">$24,780</div>
                    <div class="card-title">Total Revenue</div>
                    <div class="card-change change-up">
                        <i class="fas fa-arrow-up me-1"></i> 12.5% from last month
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="dashboard-card">
                    <div class="card-icon bg-info bg-opacity-10 text-info">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="card-value">1,248</div>
                    <div class="card-title">Total Orders</div>
                    <div class="card-change change-up">
                        <i class="fas fa-arrow-up me-1"></i> 8.3% from last month
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="dashboard-card">
                    <div class="card-icon bg-warning bg-opacity-10 text-warning">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-value">2,540</div>
                    <div class="card-title">Customers</div>
                    <div class="card-change change-up">
                        <i class="fas fa-arrow-up me-1"></i> 5.7% from last month
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="dashboard-card">
                    <div class="card-icon bg-danger bg-opacity-10 text-danger">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div class="card-value">780</div>
                    <div class="card-title">Products</div>
                    <div class="card-change change-down">
                        <i class="fas fa-arrow-down me-1"></i> 2.1% from last month
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row mb-4">
            <div class="col-lg-8 mb-4">
                <div class="chart-container">
                    <div class="chart-header">
                        <h3 class="chart-title">Sales Overview</h3>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary">Week</button>
                            <button class="btn btn-sm btn-outline-secondary mx-1">Month</button>
                            <button class="btn btn-sm btn-success">Year</button>
                        </div>
                    </div>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="chart-container">
                    <div class="chart-header">
                        <h3 class="chart-title">Revenue Sources</h3>
                    </div>
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="row">
            <div class="col-12">
                <div class="chart-container">
                    <div class="chart-header">
                        <h3 class="chart-title">Recent Orders</h3>
                        <button class="btn btn-sm btn-outline-success">View All</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#FC-0001</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="avatar-sm me-2">
                                            John Doe
                                        </div>
                                    </td>
                                    <td>Jun 12, 2023</td>
                                    <td>$128.90</td>
                                    <td><span class="status-badge status-completed">Completed</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#FC-0002</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=random" class="avatar-sm me-2">
                                            Sarah Smith
                                        </div>
                                    </td>
                                    <td>Jun 11, 2023</td>
                                    <td>$56.75</td>
                                    <td><span class="status-badge status-completed">Completed</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#FC-0003</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=random" class="avatar-sm me-2">
                                            Mike Johnson
                                        </div>
                                    </td>
                                    <td>Jun 10, 2023</td>
                                    <td>$245.50</td>
                                    <td><span class="status-badge status-pending">Pending</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#FC-0004</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Emily+Wilson&background=random" class="avatar-sm me-2">
                                            Emily Wilson
                                        </div>
                                    </td>
                                    <td>Jun 9, 2023</td>
                                    <td>$78.25</td>
                                    <td><span class="status-badge status-cancelled">Cancelled</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#FC-0005</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=David+Brown&background=random" class="avatar-sm me-2">
                                            David Brown
                                        </div>
                                    </td>
                                    <td>Jun 8, 2023</td>
                                    <td>$152.40</td>
                                    <td><span class="status-badge status-completed">Completed</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const sidebar = document.querySelector('.sidebar');
            
            mobileMenuBtn.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });
            
            // Initialize sales chart
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Current Year',
                        data: [8500, 12500, 9800, 15800, 14200, 19800, 18200, 21500, 19800, 22500, 24800, 26700],
                        borderColor: '#0aad0a',
                        backgroundColor: 'rgba(10, 173, 10, 0.1)',
                        tension: 0.4,
                        fill: true
                    }, {
                        label: 'Previous Year',
                        data: [7200, 9800, 11200, 13800, 12500, 15200, 16800, 18200, 17500, 19800, 20500, 21800],
                        borderColor: '#94a3b8',
                        borderDash: [5, 5],
                        tension: 0.4,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Initialize revenue chart
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            const revenueChart = new Chart(revenueCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Electronics', 'Fashion', 'Home & Kitchen', 'Beauty', 'Sports'],
                    datasets: [{
                        data: [35, 25, 20, 15, 5],
                        backgroundColor: [
                            '#0aad0a',
                            '#3b82f6',
                            '#f59e0b',
                            '#ef4444',
                            '#8b5cf6'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    },
                    cutout: '70%'
                }
            });
            
            // Search functionality
            const searchInput = document.querySelector('.search-bar');
            searchInput.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            searchInput.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
            
            // Notification dropdown
            const notificationBtn = document.querySelector('.notification-badge').parentElement;
            notificationBtn.addEventListener('click', function(e) {
                e.preventDefault();
                // In a real app, this would show notifications
                alert('Notifications would appear here!');
            });
            
            // Order action buttons
            const actionButtons = document.querySelectorAll('.btn-outline-secondary');
            actionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // In a real app, this would show an action menu
                    alert('Order actions would appear here!');
                });
            });
            
            // Status filter buttons
            const statusBadges = document.querySelectorAll('.status-badge');
            statusBadges.forEach(badge => {
                badge.addEventListener('click', function() {
                    const status = this.classList.contains('status-completed') ? 'Completed' : 
                                 this.classList.contains('status-pending') ? 'Pending' : 'Cancelled';
                    alert(`Filtering orders by status: ${status}`);
                });
            });
            
            // Card animations
            const cards = document.querySelectorAll('.dashboard-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 1px 2px rgba(0,0,0,0.05)';
                });
            });
        });
    </script>
</body>
</html>
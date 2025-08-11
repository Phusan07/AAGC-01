<?php require('head.php'); ?>
<?php require('nav.php'); ?>

    <style>
        /* Modern and beautiful design with performance optimizations */
        :root {
            --primary-gradient: linear-gradient(135deg, #FFD700 0%, #DAA520 100%);
            --secondary-gradient: linear-gradient(135deg, #F4A460 0%, #CD853F 100%);
            --success-gradient: linear-gradient(135deg, #FFA500 0%, #FF8C00 100%);
            --card-shadow: 0 20px 40px rgba(139, 69, 19, 0.1);
            --hover-shadow: 0 30px 60px rgba(139, 69, 19, 0.15);
            --border-radius: 20px;
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: var(--primary-gradient);
            position: relative;
            overflow: hidden;
            padding: 20px;
        }

        /* Animated background particles */
        .content-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 215, 0, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(218, 165, 32, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(244, 164, 96, 0.3) 0%, transparent 50%);
            animation: backgroundShift 8s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes backgroundShift {
            0%, 100% { transform: translateX(0) translateY(0) scale(1); }
            25% { transform: translateX(-10px) translateY(-10px) scale(1.02); }
            50% { transform: translateX(10px) translateY(-5px) scale(0.98); }
            75% { transform: translateX(-5px) translateY(10px) scale(1.01); }
        }

        .content {
            text-align: center;
            padding: 60px 40px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
            opacity: 0;
            transform: translateY(50px) scale(0.9);
            animation: fadeInUp 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
        }

        .content::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4, #feca57);
            border-radius: calc(var(--border-radius) + 2px);
            z-index: -1;
            opacity: 0.7;
            animation: borderGlow 3s ease-in-out infinite;
        }

        @keyframes borderGlow {
            0%, 100% { opacity: 0.7; }
            50% { opacity: 1; }
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .welcome-icon {
            font-size: 4rem;
            margin-bottom: 30px;
            display: block;
            animation: bounceIn 1s ease-out 0.5s both;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.2));
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3) rotate(180deg);
            }
            50% {
                opacity: 1;
                transform: scale(1.05) rotate(0deg);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            animation: slideInDown 1s ease-out 0.8s both;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .subtitle {
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.8;
            animation: slideInUp 1s ease-out 1s both;
            font-weight: 400;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .action-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
            animation: fadeIn 1s ease-out 1.2s both;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .btn-modern {
            padding: 16px 32px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            min-width: 200px;
            justify-content: center;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--primary-gradient);
            color: white;
            border: 2px solid transparent;
        }

        .btn-primary:hover {
            background: var(--secondary-gradient);
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
            box-shadow: var(--hover-shadow);
        }

        .btn-secondary {
            background: var(--success-gradient);
            color: white;
            border: 2px solid transparent;
        }

        .btn-secondary:hover {
            background: var(--primary-gradient);
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
            box-shadow: var(--hover-shadow);
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
            animation: fadeIn 1s ease-out 1.4s both;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #667eea;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
            font-weight: 500;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .content {
                padding: 40px 20px;
                margin: 20px;
            }
            
            h1 {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-modern {
                width: 100%;
                max-width: 300px;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .welcome-icon {
                font-size: 3rem;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 30px 15px;
            }
        }

        /* Loading animation for buttons */
        .btn-loading {
            position: relative;
            pointer-events: none;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>

    <div class="content-wrapper">
        <section class="content">
            <div class="welcome-icon">🏢</div>
            <h1>Welcome to AAGC</h1>
            <p class="subtitle">Advanced Process Management System<br>Monitor, Track, and Optimize Your Workflow</p>
            
            <div class="action-buttons">
                <a href="add.php" class="btn-modern btn-primary">
                    <i class="fas fa-tasks"></i>
                    Check Work
                </a>
                <a href="addstatus.php" class="btn-modern btn-secondary">
                    <i class="fas fa-chart-line"></i>
                    Check Status
                </a>
            </div>
            
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-number" id="totalProjects">-</div>
                    <div class="stat-label">Total Projects</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" id="activeProjects">-</div>
                    <div class="stat-label">Active Projects</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" id="completedProjects">-</div>
                    <div class="stat-label">Completed</div>
                </div>
            </div>
        </section>
    </div>

    <script>
    // Load statistics asynchronously
    document.addEventListener('DOMContentLoaded', function() {
        // Simulate loading statistics
        setTimeout(function() {
            document.getElementById('totalProjects').textContent = '25';
            document.getElementById('activeProjects').textContent = '12';
            document.getElementById('completedProjects').textContent = '13';
        }, 1000);
        
        // Add loading animation to buttons
        const buttons = document.querySelectorAll('.btn-modern');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                this.classList.add('btn-loading');
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
            });
        });
    });
    </script>

    <?php require('footer.php'); ?>
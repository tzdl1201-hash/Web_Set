<!-- 非同步資料載入腳本 -->
<script>
    (function () {
        'use strict';

        // 檢查是否為非同步模式
        const asyncMode = <?php echo isset($async_mode) && $async_mode ? 'true' : 'false'; ?>;
        const isAdmin = <?php echo $is_admin ? 'true' : 'false'; ?>;
        const isTeacherPlus = <?php echo (isset($_SESSION['is_teacherplus']) && $_SESSION['is_teacherplus']) ? 'true' : 'false'; ?>;

        if (!asyncMode || isAdmin) {
            return; // 非非同步模式或管理員,不執行
        }

        // 如果是開課教師，定義並載入教師課程資料
        // 3D Loading Animation HTML
        const loading3dHtml = `
            <div class="loader-3d-container">
                <div class="preloader">
                    <div class="preloader__ring">
                        ${Array.from({ length: 30 }, (_, i) => {
            const text = "Loading...";
            const char = text[i] || "";
            return `<div class="preloader__sector" style="transform: rotateY(${i * 12}deg) translateZ(4rem)">${char}</div>`;
        }).join('')}
                    </div>
                    <div class="preloader__ring preloader__ring--reverse">
                        ${Array.from({ length: 30 }, (_, i) => {
            const text = "Loading...";
            const char = text[i] || "";
            return `<div class="preloader__sector" style="transform: rotateY(${i * 12}deg) translateZ(4rem)">${char}</div>`;
        }).join('')}
                    </div>
                </div>
            </div>
        `;

        // 3D Loading CSS
        const loader3dStyle = document.createElement('style');
        loader3dStyle.textContent = `
            @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap');
            .loader-3d-container {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px 0;
                perspective: 40em;
                min-height: 200px;
            }
            .preloader {
                animation: tiltSpin 8s linear infinite;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 10em;
                height: 10em;
                transform-style: preserve-3d;
            }
            .preloader__ring {
                animation: spin 4s linear infinite;
                font-size: 1.2em;
                position: relative;
                height: 2rem;
                width: 1rem;
                transform-style: preserve-3d;
            }
            .preloader__ring--reverse {
                animation-direction: reverse;
            }
            .preloader__sector {
                font-family: 'Dosis', sans-serif;
                font-weight: 600;
                color: #3df1f1;
                position: absolute;
                top: 0;
                left: 0;
                text-align: center;
                text-transform: uppercase;
                width: 100%;
                height: 100%;
            }
            .preloader__sector:empty::before {
                content: "";
                display: inline-block;
                width: 100%;
                height: 100%;
                background: linear-gradient(transparent 45%, #3df1f1 45% 55%, transparent 55%);
            }
            @keyframes tiltSpin {
                from { transform: rotateY(0) rotateX(30deg); }
                to { transform: rotateY(1turn) rotateX(30deg); }
            }
            @keyframes spin {
                from { transform: rotateY(0); }
                to { transform: rotateY(1turn); }
            }
            .fade-in {
                animation: fadeIn 0.5s;
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        `;
        document.head.appendChild(loader3dStyle);

        if (isTeacherPlus) {
            const moodleUrl = '<?php echo $moodle_url; ?>';

            function loadTeacherCourses() {
                const container = document.getElementById('teacher-courses-list');
                if (!container) return;

                // 顯示載入動畫（3D 旋轉環）
                container.innerHTML = loading3dHtml;

                fetch('api/get_moodle_data.php')
                    .then(response => response.json())
                    .then(data => {
                        const courses = data.data?.my_courses_raw || data.my_courses_raw || [];
                        renderTeacherCourses(courses);
                    })
                    .catch(error => {
                        console.error('載入教師課程失敗:', error);
                        container.innerHTML = `
                            <div class="text-center py-5 text-danger">
                                <i class="fas fa-exclamation-triangle fa-2x mb-3"></i>
                                <p>課程載入失敗，請重新整理頁面</p>
                            </div>
                        `;
                    });
            }

            function renderTeacherCourses(courses) {
                const container = document.getElementById('teacher-courses-list');
                if (!container) return;

                if (!courses || courses.length === 0) {
                    container.innerHTML = `
                        <div class="text-center py-5 text-muted">
                            <i class="fas fa-chalkboard fa-4x mb-3" style="opacity:0.3;"></i>
                            <p>您目前沒有教授任何課程</p>
                            <a href="#" onclick="goToMoodle('${moodleUrl}/course/edit.php')" class="btn btn-primary mt-3">
                                <i class="fas fa-plus-circle me-2"></i>建立第一門課程
                            </a>
                        </div>
                    `;
                    return;
                }

                container.innerHTML = `
                    <div class="teacher-courses-grid">
                        ${courses.map(course => `
                            <div class="teacher-course-card" onclick="goToMoodle('${moodleUrl}/course/view.php?id=${course.id}')">
                                <div class="course-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="course-info">
                                    <h5>${course.fullname}</h5>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-users me-1"></i> 學生數: ${course.enrolledusercount || 0}
                                    </p>
                                </div>
                                <div class="course-actions">
                                    <span class="btn-icon" onclick="event.stopPropagation(); goToMoodle('${moodleUrl}/course/edit.php?id=${course.id}')" title="編輯課程">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </div>
                            </div>
                        `).join('')}
                    </div>
                `;
                container.classList.add('fade-in');
            }

            // 定義全域重新整理函式
            window.refreshTeacherCourses = function () {
                const container = document.getElementById('teacher-courses-list');
                if (container) {
                    container.innerHTML = loading3dHtml;
                }
                // 清除搜尋欄
                const searchInput = document.getElementById('teacher-course-search');
                if (searchInput) searchInput.value = '';

                fetch('index.php?clear_cache=1')
                    .then(() => loadTeacherCourses())
                    .catch(() => loadTeacherCourses());
            };

            // 定義全域搜尋函式
            window.filterTeacherCourses = function (keyword) {
                const cards = document.querySelectorAll('.teacher-course-card');
                const searchTerm = keyword.toLowerCase().trim();

                cards.forEach(card => {
                    const courseName = card.querySelector('h5')?.textContent?.toLowerCase() || '';
                    if (searchTerm === '' || courseName.includes(searchTerm)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            };

            // 標記是否已載入過課程
            let teacherCoursesLoaded = false;

            // 覆寫 showTab 來處理延遲載入
            const originalShowTab = window.showTab;
            window.showTab = function (tabId) {
                originalShowTab(tabId);

                // 當切換到課程管理時，首次載入課程
                if (tabId === 'course-management' && !teacherCoursesLoaded) {
                    teacherCoursesLoaded = true;
                    loadTeacherCourses();
                }
            };

            // 不在頁面載入時自動載入課程
            // return; // 移除這個 return 以便繼續執行下方的學生/通用邏輯
        }

        // 使用 3D Loader 替換原本的 loading logic

        // 顯示 loading 狀態
        function showLoading() {
            const sections = [
                '.announcement-body',
                '#available-courses-container',
                '.curriculum-section table tbody',
                '#my-courses .row',
                '#history',
                '#curriculum-progress-widget',
                '#grades-chart-container'
            ];

            sections.forEach(selector => {
                const el = document.querySelector(selector);
                if (el) {
                    el.innerHTML = loading3dHtml;
                }
            });
        }

        // 渲染公告
        function renderAnnouncements(announcements) {
            const container = document.querySelector('.announcement-body');
            if (!container) return;

            if (!announcements || announcements.length === 0) {
                container.innerHTML = `
                <div class="text-center py-5 text-muted">
                    <i class="far fa-clipboard fa-3x mb-3" style="opacity:0.5;"></i>
                    <p class="mb-0">目前沒有新公告</p>
                </div>
            `;
                return;
            }

            container.innerHTML = announcements.map(ann => `
            <div class="news-item" onclick="goToMoodle('${ann.link}')">
                <div class="news-date">
                    <i class="far fa-calendar-alt"></i>
                    ${new Date(ann.date * 1000).toLocaleDateString('zh-TW', { month: '2-digit', day: '2-digit' })}
                </div>
                <div class="flex-grow-1">
                    <span class="news-badge">${ann.course_name}</span>
                    <span class="fw-medium">${ann.subject}</span>
                </div>
                <i class="fas fa-chevron-right text-muted"></i>
            </div>
        `).join('');

            container.classList.add('fade-in');
        }

        // 渲染可選修課程
        function renderAvailableCourses(courses) {
            const container = document.getElementById('available-courses-container');
            if (!container) return;

            if (!courses || courses.length === 0) {
                container.innerHTML = `
                <div class="col-12 text-center py-5 text-muted">
                    <i class="fas fa-box-open fa-4x mb-3" style="opacity:0.3;"></i>
                    <p>目前沒有可選修的新課程</p>
                </div>
            `;
                return;
            }

            const moodleUrl = '<?php echo $moodle_url; ?>';
            container.innerHTML = courses.map(course => {
                const catName = course.categoryname || course.displayname || '其他';
                let typeTag = 'other', typeLabel = '一般';
                if (catName.includes('實體')) {
                    typeTag = 'physical';
                    typeLabel = '實體';
                } else if (catName.includes('數位') || catName.includes('線上')) {
                    typeTag = 'digital';
                    typeLabel = '數位';
                }

                return `
                <div class="col-md-6 course-item" data-type="${typeTag}" data-name="${course.fullname.toLowerCase()}">
                    <div class="card course-card h-100 position-relative">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title fw-bold mb-2">${course.fullname}</h6>
                                <small class="text-muted"><i class="fas fa-folder me-1"></i>${catName}</small>
                            </div>
                            <button class="btn btn-sm" 
                                    style="background: var(--primary); color: white; border-radius: 20px; padding: 8px 20px;"
                                    onclick="goToMoodle('${moodleUrl}/enrol/index.php?id=${course.id}')">
                                <i class="fas fa-plus me-1"></i>選課
                            </button>
                        </div>
                        <span class="category-label label-${typeTag}">${typeLabel}</span>
                    </div>
                </div>
            `;
            }).join('');

            container.classList.add('fade-in');
        }

        // 渲染必修進度
        function renderCurriculumStatus(status) {
            const tbody = document.querySelector('.curriculum-section table tbody');
            if (!tbody) return;

            if (!status || Object.keys(status).length === 0) {
                tbody.innerHTML = `
                <tr>
                    <td colspan="2" class="text-center text-muted py-4">目前無必修課程設定</td>
                </tr>
            `;
                return;
            }

            const moodleUrl = '<?php echo $moodle_url; ?>';
            tbody.innerHTML = Object.entries(status).map(([catName, items]) => {
                let icons = '';
                if (!items || items.length === 0) {
                    icons = '<span class="text-muted">無課程</span>';
                } else {
                    // 排序: 綠色 (green) > 黃色 (yellow) > 其他 (red/gray)
                    const sortedItems = [...items].sort((a, b) => {
                        const order = { green: 0, yellow: 1, red: 2 };
                        const aOrder = order[a.status] ?? 2;
                        const bOrder = order[b.status] ?? 2;
                        return aOrder - bOrder;
                    });
                    icons = sortedItems.map(item => {
                        const title = `${item.fullname}: ${item.status === 'green' ? '已完成' : item.status === 'yellow' ? '未完成' : '尚未選課'}`;
                        const iconClass = item.status === 'green' ? 'fas fa-check-circle icon-green' :
                            item.status === 'yellow' ? 'fas fa-exclamation-circle icon-yellow' :
                                'far fa-play-circle icon-red';

                        if (item.status === 'green') {
                            return `<i class="${iconClass} status-icon" title="${title}" data-bs-toggle="tooltip"></i>`;
                        } else {
                            return `<a href="#" onclick="goToMoodle('${moodleUrl}/course/view.php?id=${item.id}')" style="text-decoration:none;">
                                    <i class="${iconClass} status-icon" title="${title}" data-bs-toggle="tooltip"></i>
                                </a>`;
                        }
                    }).join('');
                }

                return `
                <tr>
                    <td><strong>${catName}</strong></td>
                    <td>${icons}</td>
                </tr>
            `;
            }).join('');

            tbody.classList.add('fade-in');

            // 重新初始化 Bootstrap tooltips
            if (typeof bootstrap !== 'undefined') {
                const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                tooltips.forEach(el => new bootstrap.Tooltip(el));
            }
        }

        // 渲染我的課程
        function renderMyCourses(courses) {
            const container = document.querySelector('#my-courses .row');
            if (!container) return;

            if (!courses || courses.length === 0) {
                container.innerHTML = `
                <div class="col-12 text-center py-5 text-muted">
                    <i class="fas fa-book-open fa-4x mb-3" style="opacity:0.3;"></i>
                    <p>您還沒有選修任何課程</p>
                    <button class="btn btn-primary mt-3" onclick="showTab('quick-enroll')" 
                            style="background: var(--primary); border:none; padding: 12px 24px; border-radius: 30px;">
                        <i class="fas fa-search me-2"></i>探索課程
                    </button>
                </div>
            `;
                return;
            }

            const moodleUrl = '<?php echo $moodle_url; ?>';
            container.innerHTML = courses.map(course => `
                <div class="col-md-3">
                    <div class="card course-card h-100" style="cursor:pointer;" onclick="goToMoodle('${moodleUrl}/course/view.php?id=${course.id}')">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">${course.fullname}</h6>
                        </div>
                    </div>
                </div>
            `).join('');

            container.classList.add('fade-in');
        }

        // 渲染學習歷程
        function renderLearningHistory(historyByYear) {
            const container = document.querySelector('#history');
            if (!container) return;

            // 先清空容器，保留標題
            const title = container.querySelector('h3');
            container.innerHTML = '';
            if (title) {
                container.appendChild(title);
            } else {
                container.innerHTML = '<h3 class="mb-4 fw-bold" style="color: var(--primary);"><i class="fas fa-history me-2"></i>學習歷程</h3>';
            }

            if (!historyByYear || Object.keys(historyByYear).length === 0) {
                container.innerHTML += `
                <div class="text-center py-5 text-muted">
                    <i class="fas fa-folder-open fa-4x mb-3" style="opacity:0.3;"></i>
                    <p>目前沒有學習紀錄</p>
                </div>
            `;
                return;
            }

            const moodleUrl = '<?php echo $moodle_url; ?>';
            const historyHtml = Object.entries(historyByYear).map(([year, courses]) => `
                <div class="mb-5">
                    <h5 class="mb-4"><span class="year-badge"><i class="fas fa-calendar-alt me-2"></i>${year} 年度</span></h5>
                    <div class="row g-4">
                        ${courses.map(course => `
                            <div class="col-md-4">
                                <div class="card course-card h-100" style="cursor:pointer;" onclick="goToMoodle('${moodleUrl}/course/view.php?id=${course.id}')">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">${course.fullname}</h6>
                                    </div>
                                </div>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `).join('');

            container.innerHTML += historyHtml;
            container.classList.add('fade-in');
        }

        // 渲染首頁修課進度 Widget
        function renderCurriculumProgressWidget(status) {
            const container = document.getElementById('curriculum-progress-widget');
            const summaryEl = document.getElementById('progress-summary');
            const progressFill = document.getElementById('overall-progress-fill');
            const progressText = document.getElementById('overall-progress-text');

            if (!container) return;

            if (!status || Object.keys(status).length === 0) {
                container.innerHTML = `
                    <div class="text-center py-4 text-muted">
                        <i class="fas fa-info-circle me-2"></i>目前無必修課程設定
                    </div>
                `;
                if (progressText) progressText.textContent = '無資料';
                return;
            }

            const moodleUrl = '<?php echo $moodle_url; ?>';
            let totalCourses = 0;
            let completedCourses = 0;

            // 建立進度 HTML
            let html = '<div class="progress-categories">';

            Object.entries(status).forEach(([catName, items]) => {
                html += `<div class="progress-category-row">
                    <div class="category-name"><strong>${catName}</strong></div>
                    <div class="category-items">`;

                if (!items || items.length === 0) {
                    html += '<span class="text-muted">無課程</span>';
                } else {
                    // 排序: 綠色 (green) > 黃色 (yellow) > 其他 (red/gray)
                    const sortedItems = [...items].sort((a, b) => {
                        const order = { green: 0, yellow: 1, red: 2 };
                        const aOrder = order[a.status] ?? 2;
                        const bOrder = order[b.status] ?? 2;
                        return aOrder - bOrder;
                    });
                    sortedItems.forEach(item => {
                        totalCourses++;
                        let iconClass, iconColor, title;

                        if (item.status === 'green') {
                            completedCourses++;
                            iconClass = 'fas fa-check-circle';
                            iconColor = '#10b981';
                            title = `${item.fullname}: 已完成`;
                        } else if (item.status === 'yellow') {
                            iconClass = 'fas fa-spinner';
                            iconColor = '#f59e0b';
                            title = `${item.fullname}: 進行中`;
                        } else {
                            iconClass = 'far fa-circle';
                            iconColor = '#94a3b8';
                            title = `${item.fullname}: 尚未選課`;
                        }

                        const clickable = item.status !== 'green' ?
                            `onclick="goToMoodle('${moodleUrl}/course/view.php?id=${item.id}')" style="cursor:pointer;"` : '';

                        html += `<span class="progress-item" ${clickable} title="${title}" data-bs-toggle="tooltip">
                            <i class="${iconClass}" style="color: ${iconColor}; font-size: 1.5rem;"></i>
                        </span>`;
                    });
                }

                html += '</div></div>';
            });

            html += '</div>';
            container.innerHTML = html;
            container.classList.add('fade-in');

            // 更新整體進度
            const percentage = totalCourses > 0 ? Math.round((completedCourses / totalCourses) * 100) : 0;
            if (progressFill) {
                progressFill.style.width = percentage + '%';
            }
            if (progressText) {
                progressText.textContent = `${percentage}% 完成 (${completedCourses}/${totalCourses} 門課程)`;
            }
            if (summaryEl) {
                summaryEl.innerHTML = `<span class="badge bg-primary">${completedCourses}/${totalCourses} 門完成</span>`;
            }

            // 初始化 tooltips
            if (typeof bootstrap !== 'undefined') {
                const tooltips = container.querySelectorAll('[data-bs-toggle="tooltip"]');
                tooltips.forEach(el => new bootstrap.Tooltip(el));
            }
        }

        // 渲染成績垂直長條圖
        function renderGradesChart(grades) {
            const container = document.getElementById('grades-chart-container');
            if (!container) return;

            if (!grades || grades.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-4 text-muted">
                        <i class="fas fa-chart-bar fa-3x mb-3" style="opacity:0.3;"></i>
                        <p class="mb-0">目前沒有成績資料</p>
                    </div>
                `;
                return;
            }

            // 建立垂直長條圖 HTML
            let html = '<div class="vertical-bar-chart">';

            grades.forEach(grade => {
                const percentage = grade.grade_max > 0 ? (grade.grade / grade.grade_max) * 100 : 0;
                const shortName = grade.course_name.length > 8 ?
                    grade.course_name.substring(0, 8) + '...' : grade.course_name;

                // 根據成績設定顏色
                let barColor = '#10b981'; // 綠色 (>=80)
                if (percentage < 60) {
                    barColor = '#ef4444'; // 紅色
                } else if (percentage < 80) {
                    barColor = '#f59e0b'; // 黃色
                }

                html += `
                    <div class="bar-column" title="${grade.course_name}: ${grade.grade_formatted}">
                        <div class="bar-value">${Math.round(grade.grade)}</div>
                        <div class="bar-track">
                            <div class="bar-fill" style="height: ${percentage}%; background: ${barColor};"></div>
                        </div>
                        <div class="bar-label">${shortName}</div>
                    </div>
                `;
            });

            html += '</div>';
            container.innerHTML = html;
            container.classList.add('fade-in');
        }

        // 載入資料
        function loadMoodleData() {
            showLoading();

            fetch('api/get_moodle_data.php', {
                method: 'GET',
                credentials: 'same-origin'
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP ${response.status}`);
                    }
                    return response.json();
                })
                .then(result => {
                    if (!result.success) {
                        throw new Error(result.message || 'Unknown error');
                    }

                    const data = result.data;

                    // 渲染各個區塊
                    renderAnnouncements(data.latest_announcements);
                    renderAvailableCourses(data.available_courses);
                    renderCurriculumStatus(data.curriculum_status);
                    renderMyCourses(data.my_courses_raw); renderLearningHistory(data.history_by_year);

                    // 渲染新的首頁 Widget
                    renderCurriculumProgressWidget(data.curriculum_status);
                    renderGradesChart(data.grades);

                    // 觸發自定義事件,通知其他腳本資料已載入
                    document.dispatchEvent(new CustomEvent('moodleDataLoaded', { detail: data }));

                    console.log('✅ Moodle 資料載入完成');
                })
                .catch(error => {
                    console.error('❌ 載入 Moodle 資料失敗:', error);

                    // 顯示錯誤訊息
                    const errorHtml = `
                <div class="text-center py-5 text-danger">
                    <i class="fas fa-exclamation-triangle fa-3x mb-3"></i>
                    <p>資料載入失敗,請重新整理頁面</p>
                    <button class="btn btn-primary mt-3" onclick="location.reload()">
                        <i class="fas fa-sync me-2"></i>重新整理
                    </button>
                </div>
            `;

                    document.querySelectorAll('.announcement-body, #available-courses-container').forEach(el => {
                        if (el) el.innerHTML = errorHtml;
                    });
                });
        }

        // ========== 開課教師專用載入函式 ==========
        function loadTeacherCourses() {
            const container = document.getElementById('teacher-courses-list');
            if (!container) return;

            fetch('api/get_moodle_data.php')
                .then(response => response.json())
                .then(data => {
                    console.log('Teacher API response:', data);
                    // API 回傳結構是 data.data.my_courses_raw
                    const courses = data.data?.my_courses_raw || data.my_courses_raw || [];
                    console.log('Teacher courses:', courses);
                    renderTeacherCourses(courses);
                })
                .catch(error => {
                    console.error('載入教師課程失敗:', error);
                    container.innerHTML = `
                        <div class="text-center py-5 text-danger">
                            <i class="fas fa-exclamation-triangle fa-2x mb-3"></i>
                            <p>課程載入失敗，請重新整理頁面</p>
                        </div>
                    `;
                });
        }

        // 全域函式：重新載入教師課程（清除快取）
        window.refreshTeacherCourses = function () {
            const container = document.getElementById('teacher-courses-list');
            if (container) {
                container.innerHTML = '<div class="text-center py-4"><i class="fas fa-spinner fa-spin fa-2x"></i></div>';
            }
            // 先清除快取
            fetch('index.php?clear_cache=1')
                .then(() => loadTeacherCourses())
                .catch(() => loadTeacherCourses());
        };

        function renderTeacherCourses(courses) {
            const container = document.getElementById('teacher-courses-list');
            if (!container) return;

            const moodleUrl = '<?php echo $moodle_url; ?>';

            if (!courses || courses.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-5 text-muted">
                        <i class="fas fa-chalkboard fa-4x mb-3" style="opacity:0.3;"></i>
                        <p>您目前沒有教授任何課程</p>
                        <a href="#" onclick="goToMoodle('${moodleUrl}/course/edit.php')" class="btn btn-primary mt-3">
                            <i class="fas fa-plus-circle me-2"></i>建立第一門課程
                        </a>
                    </div>
                `;
                return;
            }

            container.innerHTML = `
                <div class="teacher-courses-grid">
                    ${courses.map(course => `
                        <div class="teacher-course-card" onclick="goToMoodle('${moodleUrl}/course/view.php?id=${course.id}')">
                            <div class="course-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="course-info">
                                <h5>${course.fullname}</h5>
                                <p class="text-muted mb-0">
                                    <i class="fas fa-users me-1"></i> 學生數: ${course.enrolledusercount || 0}
                                </p>
                            </div>
                            <div class="course-actions">
                                <span class="btn-icon" onclick="event.stopPropagation(); goToMoodle('${moodleUrl}/course/edit.php?id=${course.id}')" title="編輯課程">
                           <i class="fas fa-edit"></i>
                                </span>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
            container.classList.add('fade-in');
        }

        // 頁面載入完成後立即開始載入資料
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', loadMoodleData);
        } else {
            loadMoodleData();
        }
    })();
</script>
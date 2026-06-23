<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // tasks table indexes
        if (Schema::hasTable('tasks')) {
            if (Schema::hasColumn('tasks', 'priority') && !Schema::hasIndex('tasks', 'idx_tasks_priority')) {
                Schema::table('tasks', function (Blueprint $table) {
                    $table->index('priority', 'idx_tasks_priority');
                });
            }
            if (Schema::hasColumn('tasks', 'due_date') && !Schema::hasIndex('tasks', 'idx_tasks_due_date')) {
                Schema::table('tasks', function (Blueprint $table) {
                    $table->index('due_date', 'idx_tasks_due_date');
                });
            }
            if (Schema::hasColumn('tasks', 'created_at') && !Schema::hasIndex('tasks', 'idx_tasks_created_at')) {
                Schema::table('tasks', function (Blueprint $table) {
                    $table->index('created_at', 'idx_tasks_created_at');
                });
            }
            if (Schema::hasColumn('tasks', 'end_date') && !Schema::hasIndex('tasks', 'idx_tasks_end_date')) {
                Schema::table('tasks', function (Blueprint $table) {
                    $table->index('end_date', 'idx_tasks_end_date');
                });
            }
            if (Schema::hasColumn('tasks', 'task_stage_id') && !Schema::hasIndex('tasks', 'idx_tasks_stage_id')) {
                Schema::table('tasks', function (Blueprint $table) {
                    $table->index('task_stage_id', 'idx_tasks_stage_id');
                });
            }
            if (Schema::hasColumn('tasks', 'assigned_to') && !Schema::hasIndex('tasks', 'idx_tasks_assigned_to')) {
                Schema::table('tasks', function (Blueprint $table) {
                    $table->index('assigned_to', 'idx_tasks_assigned_to');
                });
            }
        }

        // projects table indexes
        if (Schema::hasTable('projects')) {
            if (Schema::hasColumn('projects', 'status') && !Schema::hasIndex('projects', 'idx_projects_status')) {
                Schema::table('projects', function (Blueprint $table) {
                    $table->index('status', 'idx_projects_status');
                });
            }
            if (Schema::hasColumn('projects', 'deadline') && !Schema::hasIndex('projects', 'idx_projects_deadline')) {
                Schema::table('projects', function (Blueprint $table) {
                    $table->index('deadline', 'idx_projects_deadline');
                });
            }
            if (Schema::hasColumn('projects', 'priority') && !Schema::hasIndex('projects', 'idx_projects_priority')) {
                Schema::table('projects', function (Blueprint $table) {
                    $table->index('priority', 'idx_projects_priority');
                });
            }
            if (Schema::hasColumn('projects', 'created_at') && !Schema::hasIndex('projects', 'idx_projects_created_at')) {
                Schema::table('projects', function (Blueprint $table) {
                    $table->index('created_at', 'idx_projects_created_at');
                });
            }
            if (Schema::hasColumn('projects', 'workspace_id') && !Schema::hasIndex('projects', 'idx_projects_workspace_id')) {
                Schema::table('projects', function (Blueprint $table) {
                    $table->index('workspace_id', 'idx_projects_workspace_id');
                });
            }
        }

        // project_activities table indexes
        if (Schema::hasTable('project_activities')) {
            if (Schema::hasColumn('project_activities', 'project_id') && !Schema::hasIndex('project_activities', 'idx_activities_project_id')) {
                Schema::table('project_activities', function (Blueprint $table) {
                    $table->index('project_id', 'idx_activities_project_id');
                });
            }
            if (Schema::hasColumn('project_activities', 'user_id') && !Schema::hasIndex('project_activities', 'idx_activities_user_id')) {
                Schema::table('project_activities', function (Blueprint $table) {
                    $table->index('user_id', 'idx_activities_user_id');
                });
            }
            if (Schema::hasColumn('project_activities', 'created_at') && !Schema::hasIndex('project_activities', 'idx_activities_created_at')) {
                Schema::table('project_activities', function (Blueprint $table) {
                    $table->index('created_at', 'idx_activities_created_at');
                });
            }
            if (Schema::hasColumns('project_activities', ['project_id', 'created_at']) && !Schema::hasIndex('project_activities', 'idx_activities_project_created')) {
                Schema::table('project_activities', function (Blueprint $table) {
                    $table->index(['project_id', 'created_at'], 'idx_activities_project_created');
                });
            }
        }

        // task_comments table indexes
        if (Schema::hasTable('task_comments')) {
            if (Schema::hasColumn('task_comments', 'task_id') && !Schema::hasIndex('task_comments', 'idx_comments_task_id')) {
                Schema::table('task_comments', function (Blueprint $table) {
                    $table->index('task_id', 'idx_comments_task_id');
                });
            }
            if (Schema::hasColumn('task_comments', 'user_id') && !Schema::hasIndex('task_comments', 'idx_comments_user_id')) {
                Schema::table('task_comments', function (Blueprint $table) {
                    $table->index('user_id', 'idx_comments_user_id');
                });
            }
            if (Schema::hasColumn('task_comments', 'created_at') && !Schema::hasIndex('task_comments', 'idx_comments_created_at')) {
                Schema::table('task_comments', function (Blueprint $table) {
                    $table->index('created_at', 'idx_comments_created_at');
                });
            }
        }

        // timesheet_entries table indexes
        if (Schema::hasTable('timesheet_entries')) {
            if (Schema::hasColumns('timesheet_entries', ['user_id', 'date']) && !Schema::hasIndex('timesheet_entries', 'idx_entries_user_date')) {
                Schema::table('timesheet_entries', function (Blueprint $table) {
                    $table->index(['user_id', 'date'], 'idx_entries_user_date');
                });
            }
            if (Schema::hasColumn('timesheet_entries', 'timesheet_id') && !Schema::hasIndex('timesheet_entries', 'idx_entries_timesheet_id')) {
                Schema::table('timesheet_entries', function (Blueprint $table) {
                    $table->index('timesheet_id', 'idx_entries_timesheet_id');
                });
            }
        }

        // notifications table indexes if exists
        if (Schema::hasTable('notifications')) {
            if (Schema::hasColumns('notifications', ['notifiable_type', 'notifiable_id']) && !Schema::hasIndex('notifications', 'idx_notifications_notifiable')) {
                Schema::table('notifications', function (Blueprint $table) {
                    $table->index(['notifiable_type', 'notifiable_id'], 'idx_notifications_notifiable');
                });
            }
            if (Schema::hasColumn('notifications', 'created_at') && !Schema::hasIndex('notifications', 'idx_notifications_created_at')) {
                Schema::table('notifications', function (Blueprint $table) {
                    $table->index('created_at', 'idx_notifications_created_at');
                });
            }
        }
    }

    public function down(): void
    {
        // Drop indexes safely — each index dropped individually with guards
        $tables = [
            'tasks' => [
                'idx_tasks_priority', 'idx_tasks_due_date', 'idx_tasks_created_at',
                'idx_tasks_end_date', 'idx_tasks_stage_id', 'idx_tasks_assigned_to',
            ],
            'projects' => [
                'idx_projects_status', 'idx_projects_deadline', 'idx_projects_priority',
                'idx_projects_created_at', 'idx_projects_workspace_id',
            ],
            'project_activities' => [
                'idx_activities_project_id', 'idx_activities_user_id',
                'idx_activities_created_at', 'idx_activities_project_created',
            ],
            'task_comments' => [
                'idx_comments_task_id', 'idx_comments_user_id', 'idx_comments_created_at',
            ],
            'timesheet_entries' => [
                'idx_entries_user_date', 'idx_entries_timesheet_id',
            ],
            'notifications' => [
                'idx_notifications_notifiable', 'idx_notifications_created_at',
            ],
        ];

        foreach ($tables as $table => $indexes) {
            if (Schema::hasTable($table)) {
                foreach ($indexes as $index) {
                    if (Schema::hasIndex($table, $index)) {
                        Schema::table($table, function (Blueprint $table) use ($index) {
                            $table->dropIndex($index);
                        });
                    }
                }
            }
        }
    }
};

<li>
  <a href="/tasks/{{ $task->id }}" class="task-item">
    <p class="task-item__number">{{ $task->id }}</p>
    <div class="task-item__content">
      <h2 class="task-item__title">{{ $task->title }}</h1>
      <p class="task-item__body">{{ $task->body }}</p>
    </div>
  </a>
</li>
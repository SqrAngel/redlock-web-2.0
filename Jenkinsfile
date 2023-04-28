pipeline {
    agent any
    stages {
        stage('Build Docker image') {
            steps {
                script {
                    docker.build('redlock-web-2.0')
                }
            }
        }
        stage('Start Docker Compose') {
            steps {
                script {
                    sh 'docker-compose up -d'
                }
            }
        }
    }
    post {
        always {
            script {
                sh 'docker-compose down'
            }
        }
    }
}

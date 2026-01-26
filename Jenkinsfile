pipeline {
    agent any

    stages {

        stage('Build & Deploy Containers') {
            steps {
                sh '''
                echo "Stopping old containers..."
                docker-compose down || true

                echo "Building and starting containers..."
                docker-compose up -d --build
                '''
            }
        }
    }

    post {
        success {
            echo "✅ Deployment successful via GitHub Webhook"
        }
        failure {
            echo "❌ Deployment failed"
        }
    }
}
